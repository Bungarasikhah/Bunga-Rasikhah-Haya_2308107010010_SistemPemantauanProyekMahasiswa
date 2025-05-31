@extends('layouts.Dashboard')

@section('title', 'Dashboard Mahasiswa - GradPath')

@section('content')
<header>
  <h1>GradPath</h1>
  <p>Selamat datang kembali, <strong>{{ auth()->user()->name }}</strong>! Semangat untuk hari ini!</p>

  <div class="summary">
    <div class="card"><br><span>Proyek Aktif</span></div>
    <div class="card"><br><span>Deadline</span></div>
    <div class="card"><br><span>Progres</span></div>
  </div>
</header>

<section class="projects">
  <h2>Proyek Aktif</h2>
 <ul>
   @forelse ($proyekAktif as $proyek)
    <li>{{ $proyek->judul }} - {{ $proyek->status }}</li>
@empty
    <li>Belum ada proyek</li>
@endforelse
</ul>

<section class="notifications">
  <h2>Notifikasi</h2>
  {{-- Tambahkan notifikasi di sini --}}
</section>

<section class="schedule">
  <h2>Profile</h2>
  {{-- Tambahkan informasi profile di sini --}}
</section>
@endsection
