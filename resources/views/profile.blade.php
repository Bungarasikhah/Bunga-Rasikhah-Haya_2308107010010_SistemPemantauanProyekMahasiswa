<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - {{ $mahasiswa['nama'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head> 
<body>
    <div class="container">
        <div class="header">
            <div class="profile-header">
                <img src="{{ asset('images/profile.svg') }}" alt="Profile" class="profile-image">
                <div class="profile-info">
                    <h1>{{ $mahasiswa['nama'] }}</h1>
                    <div class="student-id">{{ $mahasiswa['npm'] }}</div>
                    <div class="badges">
                        <span class="badge">📚 Jenjang {{ $mahasiswa['jenjang'] }}</span>
                        <span class="badge">🎓 {{ $mahasiswa['fakultas'] }}</span>
                        <span class="badge">💻 {{ $mahasiswa['jurusan'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navigation">
            <ul class="nav-tabs">
                <li class="nav-tab active" onclick="switchTab('data-diri')">Data Diri</li>
            </ul>
        </nav>

        <div class="content">
            <div id="data-diri" class="tab-content active">
                <div class="data-grid">
                    @foreach ($dataDiri as $label => $value)
                        <div class="data-item">
                            <div class="data-label">{{ $label }}</div>
                            <div class="data-value">{{ $value }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/profile.js') }}"></script>
</body>
</html>
