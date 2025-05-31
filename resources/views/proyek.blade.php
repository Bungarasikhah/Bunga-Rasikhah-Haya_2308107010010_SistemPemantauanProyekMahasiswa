@extends('layouts.Dashboard')

@section('title', 'Manajemen Proyek Mahasiswa')

@section('head')
    <!-- Link CSS khusus untuk halaman ini -->
    <link rel="stylesheet" href="{{ asset('css/proyek.css') }}">
@endsection

@section('content')
<div class="proyek-container">
  <h1>Manajemen Proyek Mahasiswa</h1>

  <!-- ========================== -->
  <!-- 🔹 Bagian: Daftar Proyek 🔹 -->
  <!-- ========================== -->
  <section id="section-list">
    <div class="top-bar">
      <input type="text" id="search" placeholder="Cari judul / mahasiswa...">
      <button class="btn" onclick="showForm()">+ Tambah Proyek</button>
    </div>
    <table>
      <thead>
        <tr>
          <th>Judul</th>
          <th>Mahasiswa</th>
          <th>Status</th>
          <th>Periode</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="project-table"></tbody>
    </table>
  </section>

  <!-- ======================= -->
  <!-- 🔹 Bagian: Form Proyek -->
  <!-- ======================= -->
  <section id="section-form" style="display: none;">
    <h2 id="form-title">Tambah Proyek</h2>
    <form id="project-form">
      <input type="hidden" id="edit-id">
      <input type="text" id="title" placeholder="Judul Proyek" required>
      <input type="text" id="student" placeholder="Nama Mahasiswa - NIM" required>
      <input type="text" id="supervisor" placeholder="Dosen Pembimbing" required>
      <select id="status">
        <option value="Proposal">Proposal</option>
        <option value="Sedang Berjalan">Sedang Berjalan</option>
        <option value="Selesai">Selesai</option>
      </select>
      <input type="date" id="start">
      <input type="date" id="end">
      <div class="form-actions">
        <button type="submit" class="btn">Simpan</button>
        <button type="button" class="btn cancel" onclick="showList()">Batal</button>
      </div>
    </form>
  </section>

  <!-- ========================== -->
  <!-- 🔹 Bagian: Detail Proyek 🔹 -->
  <!-- ========================== -->
  <section id="section-detail" style="display: none;">
    <h2>Detail Proyek</h2>
    <p><strong>Judul:</strong> <span id="d-title"></span></p>
    <p><strong>Mahasiswa:</strong> <span id="d-student"></span></p>
    <p><strong>Dosen Pembimbing:</strong> <span id="d-supervisor"></span></p>
    <p><strong>Status:</strong> <span id="d-status"></span></p>
    <p><strong>Periode:</strong> <span id="d-period"></span></p>
    <button class="btn" onclick="showList()">Kembali</button>
  </section>

</div>
@endsection

@section('scripts')
<script src="{{ asset('js/proyek.js') }}"></script>
@endsection
