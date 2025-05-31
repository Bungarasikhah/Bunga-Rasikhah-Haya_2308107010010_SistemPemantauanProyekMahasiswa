// GradPath - Student Project Monitoring System
// Registration Form Handler

document.addEventListener('DOMContentLoaded', function() {
    // Initialize form validation
    initializeFormValidation();
    initializeSocialLogin();
});

function initializeFormValidation() {
    const signupForm = document.getElementById('signup-form');
    
    if (!signupForm) {
        console.error('Signup form not found');
        return;
    }

    // Main form submission handler
    signupForm.addEventListener('submit', handleFormSubmission);
    
    // Real-time validation for all inputs
    const inputs = signupForm.querySelectorAll('input');
    inputs.forEach(input => {
        input.addEventListener('blur', handleInputBlur);
        input.addEventListener('input', handleInputChange);
    });
}

function handleFormSubmission(e) {
    e.preventDefault();
    
    const form = e.target;
    const inputs = form.querySelectorAll('input');
    let isValid = true;
    
    // Clear previous validation states
    clearValidationErrors(inputs);
    
    // Validate all required fields
    isValid = validateRequiredFields(inputs) && isValid;
    
    // Validate specific field formats
    isValid = validateNPM(inputs[1]) && isValid;
    isValid = validateEmail(inputs[2]) && isValid;
    isValid = validatePassword(inputs[3]) && isValid;
    isValid = validatePasswordConfirmation(inputs[3], inputs[4]) && isValid;
    
    if (isValid) {
        processRegistration(form);
    } else {
        showErrorMessage('Mohon periksa kembali data yang Anda masukkan.');
    }
}

function validateRequiredFields(inputs) {
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            setFieldError(input, 'Field ini wajib diisi');
            isValid = false;
        } else {
            setFieldSuccess(input);
        }
    });
    
    return isValid;
}

function validateNPM(npmInput) {
    const npm = npmInput.value.trim();
    const npmPattern = /^[0-9]{8,13}$/;
    
    if (!npmPattern.test(npm)) {
        setFieldError(npmInput, 'NPM harus berupa 8-13 digit angka');
        return false;
    }
    
    setFieldSuccess(npmInput);
    return true;
}

function validateEmail(emailInput) {
    const email = emailInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailPattern.test(email)) {
        setFieldError(emailInput, 'Format email tidak valid');
        return false;
    }
    
    // Check if it's an institutional email (optional)
    const institutionalDomains = ['ac.id', 'edu', 'student.'];
    const isInstitutional = institutionalDomains.some(domain => email.includes(domain));
    
    if (!isInstitutional) {
        setFieldWarning(emailInput, 'Disarankan menggunakan email institusi');
    } else {
        setFieldSuccess(emailInput);
    }
    
    return true;
}

function validatePassword(passwordInput) {
    const password = passwordInput.value;
    
    if (password.length < 8) {
        setFieldError(passwordInput, 'Password minimal 8 karakter');
        return false;
    }
    
    // Check password strength
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumbers = /\d/.test(password);
    const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    
    const strengthCount = [hasUpperCase, hasLowerCase, hasNumbers, hasSpecialChar].filter(Boolean).length;
    
    if (strengthCount < 3) {
        setFieldWarning(passwordInput, 'Password lemah. Gunakan kombinasi huruf besar, kecil, angka, dan simbol');
    } else {
        setFieldSuccess(passwordInput);
    }
    
    return true;
}

function validatePasswordConfirmation(passwordInput, confirmInput) {
    const password = passwordInput.value;
    const confirmPassword = confirmInput.value;
    
    if (password !== confirmPassword) {
        setFieldError(confirmInput, 'Password dan konfirmasi password tidak cocok');
        return false;
    }
    
    setFieldSuccess(confirmInput);
    return true;
}

function processRegistration(form) {
    const submitBtn = form.querySelector('.signup-btn');
    const originalText = submitBtn.textContent;
    
    // Show loading state
    setLoadingState(submitBtn, true);
    
    // Simulate API call
    setTimeout(() => {
        // Simulate successful registration
        showSuccessMessage('Pendaftaran berhasil! Silakan cek email untuk verifikasi akun.');
        
        // Reset form
        form.reset();
        
        // Redirect after delay
        setTimeout(() => {
            window.location.href = '/page/user/login.html';
        }, 3000);
        
        setLoadingState(submitBtn, false, originalText);
    }, 2000);
}

function initializeSocialLogin() {
    const googleBtn = document.querySelector('.google-btn');
    const appleBtn = document.querySelector('.apple-btn');
    
    if (googleBtn) {
        googleBtn.addEventListener('click', handleGoogleLogin);
    }
    
    if (appleBtn) {
        appleBtn.addEventListener('click', handleAppleLogin);
    }
}

function handleGoogleLogin() {
    showInfoMessage('Fitur login Google akan segera tersedia!');
    // Future implementation: Google OAuth integration
}

function handleAppleLogin() {
    showInfoMessage('Fitur login Apple akan segera tersedia!');
    // Future implementation: Apple OAuth integration
}

// Input event handlers
function handleInputBlur(e) {
    const input = e.target;
    if (input.value.trim()) {
        // Perform specific validation based on input type
        switch (input.type) {
            case 'email':
                validateEmail(input);
                break;
            case 'password':
                if (input.placeholder.includes('Konfirmasi')) {
                    const passwordInput = input.form.querySelector('input[type="password"]:not([placeholder*="Konfirmasi"])');
                    validatePasswordConfirmation(passwordInput, input);
                } else {
                    validatePassword(input);
                }
                break;
            default:
                if (input.placeholder.includes('NPM')) {
                    validateNPM(input);
                } else {
                    setFieldSuccess(input);
                }
        }
    } else {
        clearFieldValidation(input);
    }
}

function handleInputChange(e) {
    const input = e.target;
    // Clear error state when user starts typing
    if (input.style.borderColor === '#e53e3e') {
        clearFieldValidation(input);
    }
}

// Utility functions for field validation states
function setFieldError(input, message) {
    input.style.borderColor = '#e53e3e';
    input.style.backgroundColor = '#fed7d7';
    input.title = message;
}

function setFieldSuccess(input) {
    input.style.borderColor = '#48bb78';
    input.style.backgroundColor = '#f0fff4';
    input.title = '';
}

function setFieldWarning(input, message) {
    input.style.borderColor = '#ed8936';
    input.style.backgroundColor = '#fefcf0';
    input.title = message;
}

function clearFieldValidation(input) {
    input.style.borderColor = '#e2e8f0';
    input.style.backgroundColor = '#f7fafc';
    input.title = '';
}

function clearValidationErrors(inputs) {
    inputs.forEach(input => clearFieldValidation(input));
}

function setLoadingState(button, isLoading, originalText = 'Daftar Sekarang') {
    if (isLoading) {
        button.textContent = 'Mendaftar...';
        button.disabled = true;
        button.style.opacity = '0.7';
    } else {
        button.textContent = originalText;
        button.disabled = false;
        button.style.opacity = '1';
    }
}

// Message display functions
function showSuccessMessage(message) {
    alert(`✅ ${message}`);
}

function showErrorMessage(message) {
    alert(`❌ ${message}`);
}

function showInfoMessage(message) {
    alert(`ℹ️ ${message}`);
}

// Export functions for potential use in other modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        validateNPM,
        validateEmail,
        validatePassword,
        validatePasswordConfirmation
    };
}