@extends('layouts.app')

@section('head')
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
@endsection

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

    /* buat flex container untuk header */
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .gradient-card h1 {
    color: white;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    margin: 0;
  }

  .btn-back {
    background: transparent;
    color: white; /* warna putih */
    border: 2px solid white; /* border putih */
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
    border-color: white;
    text-decoration: none;
  }

  .form-container {
    background: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 30px auto 0;
  }

  .btn-submit {
    background-color: #2575fc;
    color: white;
    font-weight: 600;
    border-radius: 8px;
    padding: 10px 24px;
    border: none;
    transition: background-color 0.3s ease;
  }

  .btn-submit:hover {
    background-color: #6a11cb;
  }

  /* Container utama supaya ada padding dan max lebar */
  .container.py-4 {
    max-width: 700px;
  }
</style>
@endsection

@section('content')
<div class="container py-4">
  <div class="gradient-card mb-4">
    <h1>Edit Barang</h1>
    <a href="{{ route('barangs.index') }}" class="btn-back">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>
  </div>

  <div class="form-container">
    <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
      @csrf
      @method('PUT')

      @include('barangs.form', ['barang' => $barang])

      <button type="submit" class="btn-submit mt-3">Simpan Perubahan</button>
    </form>
  </div>
</div>
@endsection
