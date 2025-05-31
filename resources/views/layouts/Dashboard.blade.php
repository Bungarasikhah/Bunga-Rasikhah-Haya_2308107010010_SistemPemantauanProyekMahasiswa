<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard - GradPath')</title>

  <!-- Tambahkan CSS dashboard -->
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

  @yield('head')
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Dashboard</h2>
      <nav>
        <ul>
          <a href="{{ route('dashboard') }}">Dashboard</a>
          <li><a href="{{ route('proyek') }}">Proyek</a></li>
          <li><a href="{{ route('evaluations') }}">Nilai&Evaluation</a></li>
          <li><a href="{{ route('profile') }}">Profile</a></li>
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      @yield('content')
    </main>
  </div>

  @yield('scripts')
</body>
</html>
