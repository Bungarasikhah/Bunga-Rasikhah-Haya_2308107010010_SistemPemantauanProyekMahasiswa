<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GradPath - Sign Up</title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <h1><span class="gray">Grad</span><span class="bold">PATH</span></h1>
      <p>Sistem Pemantauan Proyek dan<br/>Manajemen Tugas Akhir untuk<br/>Mahasiswa yang Produktif</p>
      <div class="illustration">🎓</div>
    </div>
    <div class="right-panel">
      <h2>Daftar Akun</h2>
      <form id="signup-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <input type="text" name="name" placeholder="Nama Lengkap" required />
        </div>
        <div class="form-group">
          <input type="text" name="npm" placeholder="NPM (Nomor Pokok Mahasiswa)" required pattern="[0-9]{8,13}" title="Masukkan NPM yang valid (8-13 digit)" />
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required minlength="8" />
        </div>
        <div class="form-group">
          <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required minlength="8" />
        </div>
        <button type="submit" class="signup-btn">Daftar Sekarang</button>
      </form>
    </div>
  </div>
  <script src="{{ asset('js/register.js') }}"></script>
</body>
</html>
