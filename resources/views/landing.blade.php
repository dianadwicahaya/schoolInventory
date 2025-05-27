@extends('layouts.app')

@section('styles')
<style>
  body {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
  }

  .landing-container {
    text-align: center;
    max-width: 600px;
    padding: 40px;
    background: rgba(255 255 255 / 0.1);
    border-radius: 20px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2);
  }

  .landing-container h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
  }

  .landing-container p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }

  .btn-primary {
    background-color: #2575fc;
    color: white;
    font-weight: 700;
    padding: 12px 30px;
    border-radius: 12px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    font-size: 1.2rem;
  }

  .btn-primary:hover {
    background-color: #1a5ed6;
  }
</style>
@endsection

@section('content')
<div class="landing-container">
    <h1>Selamat Datang di Inventory Kami</h1>
    <p>Kelola barang Anda dengan mudah dan cepat menggunakan aplikasi kami yang sederhana dan powerful.</p>
    <a href="{{ route('barangs.index') }}" class="btn-primary">Mulai Sekarang</a>
</div>
@endsection
