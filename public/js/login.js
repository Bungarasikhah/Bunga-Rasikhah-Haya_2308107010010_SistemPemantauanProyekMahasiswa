// Menambahkan event listener untuk form login
document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Mengambil nilai dari form input
  const npm = document.getElementById('npm').value.trim();
  const password = document.getElementById('password').value.trim();

  // Mengambil elemen untuk menampilkan pesan error
  const npmError = document.getElementById('npmError');
  const passwordError = document.getElementById('passwordError');
  const loginResult = document.getElementById('loginResult');

  // Menghapus pesan error sebelumnya
  npmError.textContent = '';
  passwordError.textContent = '';
  loginResult.textContent = '';

  let valid = true;

  // Validasi NPM
  if (npm === '') {
    npmError.textContent = 'NPM harus diisi';
    valid = false;
  } else if (!/^\d{10}$/.test(npm)) {  // Validasi untuk memastikan NPM 10 digit angka
    npmError.textContent = 'NPM harus berupa 10 digit angka';
    valid = false;
  }

  // Validasi Password
  if (password === '') {
    passwordError.textContent = 'Password harus diisi';
    valid = false;
  }

  // Jika semua input valid
  if (valid) {
    // Dummy login check (ganti dengan autentikasi server jika diperlukan)
    if (npm === '123456789' && password === 'password') {
      loginResult.textContent = 'Login berhasil!';
      loginResult.style.color = 'green';
    } else {
      loginResult.textContent = 'NPM atau password salah';
      loginResult.style.color = 'red';
    }
  }
});

// Toggle password visibility
document.getElementById('togglePassword').addEventListener('click', function() {
  const passwordInput = document.getElementById('password');
  const eyeIcon = document.getElementById('eyeIcon');

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';  // Mengubah input menjadi tipe text
    eyeIcon.classList.remove('fa-eye');  // Ganti ikon eye menjadi eye-slash
    eyeIcon.classList.add('fa-eye-slash');
  } else {
    passwordInput.type = 'password';  // Mengubah input kembali menjadi password
    eyeIcon.classList.remove('fa-eye-slash');  // Ganti ikon eye-slash menjadi eye
    eyeIcon.classList.add('fa-eye');
  }
});
