@extends('layouts.app')

@section('title', 'Sistem Pemantauan Proyek Mahasiswa')

@section('head')
    <!-- Link CSS khusus untuk halaman ini -->
    <link rel="stylesheet" href="{{ asset('../css/landing.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Pantau Proyek<br>
                            <span style="background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Mahasiswa</span><br>
                            dengan Mudah
                        </h1>
                        <p class="hero-subtitle">
                            Sistem manajemen proyek yang membantu mahasiswa dan dosen memantau progress tugas akhir, skripsi, dan penelitian secara real-time.
                        </p>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">150+</span>
                                <span class="stat-label">Proyek Aktif</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Tingkat Keberhasilan</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Dosen Pembimbing</span>
                            </div>
                        </div>

                        <div class="cta-buttons d-flex flex-wrap">
                            <a href="/projects" class="btn-primary-custom">
                                <i class="fas fa-rocket me-2"></i>
                                Mulai Sekarang
                            </a>
                            <a href="#features" class="btn-secondary-custom">
                                <i class="fas fa-play me-2"></i>
                                Lihat Demo
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image text-center">
                        <div style="font-size: 20rem; color: rgba(255,255,255,0.1); animation: float 6s ease-in-out infinite;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Unggulan -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="section-title">Fitur Unggulan</h2>
            <p class="section-subtitle">
                Dapatkan pengalaman manajemen proyek yang lebih efisien dengan fitur-fitur canggih yang kami sediakan.
            </p>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="feature-title">Manajemen Proyek Lengkap</h3>
                        <p class="feature-description">
                            Kelola semua aspek proyek mulai dari perencanaan, pelaksanaan, hingga evaluasi dengan interface yang intuitif dan mudah digunakan.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3 class="feature-title">Tracking Progress Real-time</h3>
                        <p class="feature-description">
                            Pantau perkembangan proyek secara real-time dengan dashboard yang menampilkan progress, deadline, dan milestone penting.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="feature-title">Kolaborasi Tim</h3>
                        <p class="feature-description">
                            Fasilitasi komunikasi antara mahasiswa dan dosen pembimbing dengan sistem notifikasi dan komentar terintegrasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Sistem -->
    <section class="stats-section" id="stats">
        <div class="container">
            <h2 class="section-title text-white">Statistik Sistem</h2>
            <p class="section-subtitle text-white-50">
                Lihat pencapaian dan performa sistem kami dalam angka
            </p>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="stat-title">1,250+</div>
                    <div class="stat-desc">Mahasiswa Aktif</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stat-title">850+</div>
                    <div class="stat-desc">Proyek Selesai</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-title">75+</div>
                    <div class="stat-desc">Dosen Pembimbing</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-title">98%</div>
                    <div class="stat-desc">On-Time Completion</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Siap Memulai Proyek Anda?</h2>
            <p class="cta-subtitle">
                Bergabunglah dengan ribuan mahasiswa yang telah merasakan kemudahan manajemen proyek dengan sistem kami.
            </p>
            <div class="cta-buttons d-flex justify-content-center flex-wrap">
                <a href="/projects/create" class="btn-primary-custom">
                    <i class="fas fa-plus me-2"></i>
                    Buat Proyek Baru
                </a>
                <a href="/register" class="btn-secondary-custom">
                    <i class="fas fa-user-plus me-2"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Memuat JS untuk halaman ini -->
    <script src="{{ asset('../js/landing.js') }}"></script>
@endsection
