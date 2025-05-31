@extends('layouts.Dashboard')

@section('title', 'Nilai & Evaluasi Proyek Mahasiswa')

@section('content')
  <h1>📊 Nilai & Evaluasi Proyek Mahasiswa</h1>

  <div class="search-bar">
    <input type="text" id="search-eval" placeholder="🔍 Cari dosen atau proyek..." />
  </div>

  <table>
    <thead>
      <tr>
        <th>Nama Dosen</th>
        <th>Judul Proyek</th>
        <th>Aspek Penilaian</th>
        <th>Nilai</th>
        <th>Komentar</th>
      </tr>
    </thead>
    <tbody id="evaluation-table">
      {{-- Data akan di-render oleh JavaScript --}}
    </tbody>
  </table>

  <div class="average">
    <span class="highlight">Rata-rata Nilai:</span>
    <span id="average-score" class="badge">-</span>
  </div>
@endsection

@push('scripts')
<script>
  const evaluations = @json($evaluations);
</script>
<script src="{{ asset('js/nilai.js') }}"></script>
@endpush
