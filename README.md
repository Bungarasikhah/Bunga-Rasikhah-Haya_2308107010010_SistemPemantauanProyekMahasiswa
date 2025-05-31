Nama : Bunga Rasikhah Haya
NPM : 2308107010010

Deskripsi Aplikasi
GradPath adalah sebuah aplikasi web berbasis framework Laravel yang dirancang untuk membantu mahasiswa dan institusi pendidikan dalam mengelola, memantau, dan mengevaluasi progres pengerjaan proyek mahasiswa secara efisien dan terstruktur. Sistem ini menyediakan antarmuka intuitif yang memungkinkan mahasiswa untuk melacak kemajuan proyek mereka dari awal hingga selesai, serta mempermudah dosen atau pembimbing dalam memantau dan mengevaluasi performa mahasiswa secara berkala.
Aplikasi ini dikembangkan sebagai solusi terhadap kurangnya sistem terintegrasi yang mampu menyajikan informasi proyek mahasiswa secara real-time dan terpersonalisasi. Dengan fitur-fitur yang dirancang khusus untuk kebutuhan akademik, GradPath diharapkan dapat meningkatkan keterlibatan mahasiswa dalam proyek akademik, memperkuat komunikasi dengan pembimbing, serta menumbuhkan tanggung jawab dan profesionalisme dalam menyelesaikan proyek.

Tujuan Utama Pengembangan GradPath
1. Memberikan sistem monitoring proyek yang efisien bagi mahasiswa.
2. Menyajikan dashboard ringkasan proyek yang memudahkan pemantauan progres.
3. Memfasilitasi proses evaluasi oleh dosen atau pembimbing secara terstruktur.
4. Menjadi wadah penyimpanan histori proyek mahasiswa yang terdokumentasi dengan baik.

Fitur Utama GradPath
1. Autentikasi Login dan Registrasi menggunakan NPM
    - Sistem login menggunakan NPM (Nomor Pokok Mahasiswa) sebagai pengganti email.
    - Validasi input untuk memastikan NPM unik dan sesuai struktur.
    - Fitur ini memudahkan integrasi dengan data akademik yang sudah ada di kampus.

2. Dashboard Interaktif
    - Menyajikan data ringkasan seperti:
    - Jumlah proyek aktif
    - Jumlah proyek yang memiliki deadline
    - Rata-rata progres pengerjaan proyek
    - Dashboard juga menyapa pengguna dengan ucapan personal.

3. Manajemen Proyek
    - Menambahkan proyek baru
    - Melihat detail proyek
    - Mengubah status dan progres proyek
    - Menghapus proyek yang tidak diperlukan
    - Setiap proyek memiliki atribut seperti judul, status, periode_mulai, periode_selesai, dan progres.

4. Evaluasi dan Penilaian
    - Fitur halaman "Evaluations" memungkinkan pembimbing memberikan penilaian atau catatan terhadap progres mahasiswa.

5. Profil Pengguna
    - Halaman profil memuat informasi pengguna seperti nama, NPM, dan riwayat aktivitas.

Penjelasan Kode dan User Interface
1. Autentikasi Custom
    - Login menggunakan npm sebagai credential utama.
    - Validasi login dilakukan di LoginController.
      
2.  Dashboard (DashboardController)
    - Mengambil data proyek dari user yang sedang login.
    - Menghitung:
    - Jumlah proyek aktif
    - Jumlah proyek dengan deadline (periode_selesai tidak null)
    - Rata-rata progres proyek
    - Mengirim data ke dashboard.blade.php.
      
3. Tampilan User Interface
   - Layout utama di layouts/Dashboard.blade.php berisi sidebar dan struktur HTML dasar.
   - Tampilan dashboard.blade.php menampilkan ucapan selamat datang dan ringkasan data dengan <div class="card"> serta <progress> bar.
  
   - Cara Instalasi Aplikasi
   - 1. Clone Repository
        git clone <url-repo>
        cd GradPath
     2. Install Dependency Laravel
        composer install
     3. Copy & KOnfigurasi File .env
        cp .env.example .env
     5. Generate App Key
        php artisan key:generate
     6. Migrasi dan Seeder Database
        php artisan migrate
        php artisan db:seed
     7. Jalankan Aplikasi
        php artisan serve
