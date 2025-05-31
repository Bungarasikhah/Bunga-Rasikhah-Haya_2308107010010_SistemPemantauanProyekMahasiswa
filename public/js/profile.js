function switchTab(tabId, event) {
    // Sembunyikan semua konten tab
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
        content.classList.remove('active');
    });

    // Hapus kelas aktif dari semua tab
    const tabs = document.querySelectorAll('.nav-tab');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    // Tampilkan konten tab yang dipilih
    document.getElementById(tabId).classList.add('active');

    // Tambahkan kelas aktif ke tab yang diklik
    event.target.classList.add('active');
}

// Efek interaktif saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    const dataItems = document.querySelectorAll('.data-item');

    dataItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.02)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    const profileImage = document.querySelector('.profile-image');
    profileImage.addEventListener('load', function() {
        this.style.opacity = '1';
    });
});
