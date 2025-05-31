<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistem Manajemen Proyek Mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="login-bg min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-md">
    <div class="glass-effect rounded-2xl shadow-2xl p-8 fade-in">
      <div class="text-center mb-8">
        <div class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4 shadow-lg">
          <i class="fas fa-graduation-cap text-indigo-600 text-2xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-white mb-2">Selamat Datang</h1>
        <p class="text-indigo-100">Sistem Manajemen Proyek Mahasiswa</p>
      </div>

      @if (session('error'))
        <div class="bg-red-500/20 border border-red-400/30 text-red-200 px-4 py-3 rounded-lg text-sm mb-4">
          <i class="fas fa-exclamation-triangle mr-2"></i>{{ session('error') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- NPM -->
        <div class="space-y-2">
          <label for="npm" class="text-white font-medium block">
            <i class="fas fa-id-card mr-2"></i>NPM
          </label>
          <input type="text" name="npm" value="{{ old('npm') }}" class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/70 transition-all duration-300" placeholder="Masukkan NPM" required>
          @error('npm')
            <div class="text-red-300 text-sm">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div class="space-y-2">
          <label for="password" class="text-white font-medium block">
            <i class="fas fa-lock mr-2"></i>Password
          </label>
          <div class="relative">
            <input type="password" id="password" name="password" class="w-full px-4 py-3 pr-12 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/70 transition-all duration-300" placeholder="Masukkan password" required>
            <button type="button" id="togglePassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white/70 hover:text-white transition-colors">
              <i class="fas fa-eye" id="eyeIcon"></i>
            </button>
          </div>
          @error('password')
            <div class="text-red-300 text-sm">{{ $message }}</div>
          @enderror
        </div>
        <!-- Submit -->
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300">
          <i class="fas fa-sign-in-alt mr-2"></i>Masuk
        </button>
      </form>
    </div>
  </div>
  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
