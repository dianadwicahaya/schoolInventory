@extends('layouts.app')

@section('styles')
<style>
  body {
    background-color: white !important;
    color: #333;
  }

  .gradient-card {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 40px auto;
  }

  /* Header dengan flex supaya judul di kiri, tombol di kanan */
  .gradient-card .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
  }

  .gradient-card h1 {
    margin: 0;
    font-weight: 600;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
  }

  /* Tombol kembali putih */
  .btn-back {
    background: transparent;
    color: white;
    border: 2px solid white;
    padding: 6px 14px;
    border-radius: 8px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
    font-size: 0.9rem;
  }

  .btn-back i {
    margin-right: 6px;
    font-size: 1.1rem;
  }

  .btn-back:hover {
    background-color: white;
    color: #2575fc;
    text-decoration: none;
  }

  /* Style input agar jelas di atas gradient */
  .gradient-card input,
  .gradient-card select,
  .gradient-card textarea {
    width: 100%;
    padding: 12px 16px;
    margin-bottom: 16px;
    border-radius: 12px;
    border: none;
    font-size: 1rem;
    background-color: rgba(255 255 255 / 0.9);
    color: #333;
  }

  .gradient-card input:focus,
  .gradient-card select:focus,
  .gradient-card textarea:focus {
    outline: none;
    box-shadow: 0 0 5px 2px rgba(37, 117, 252, 0.7);
  }

  /* Tombol simpan */
  .btn-primary {
    background-color: #2575fc;
    border: none;
    border-radius: 12px;
    padding: 12px 24px;
    font-size: 1.1rem;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #1a5ed6;
  }
</style>
@endsection

@section('content')
@if(session('success'))
<div class="notif-container" style="max-width:600px;margin:20px auto 0;">
  <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius:12px; padding:15px 20px;">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
@endif

<div class="gradient-card">
  <div class="header">
    <h1>Tambah Barang</h1>
    <a href="{{ route('barangs.index') }}" class="btn-back">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>
  </div>

  <form action="{{ route('barangs.store') }}" method="POST">
    @csrf

    @include('barangs.form')

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@endsection

@section('head')
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
@endsection
