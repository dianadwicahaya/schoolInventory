@extends('layouts.guest')
@section('styles')
  <style>
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      font-family: 'Poppins', sans-serif;
      color: white;
    }

    .card {
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .form-control:focus {
      border-color:linear-gradient(to right, #6a11cb, #2575fc);
      box-shadow: 0 0 0 0.25rem rgba(37, 117, 252, 0.25);
    }

    .btn-primary {
      background-color: #2575fc;
      border: none;
    }

    .btn-primary:hover {
      background-color: #1a5ed6;
    }
  </style>
@endsection

@section('content')
<h4 class="mb-3 text-center">Login</h4>
@if(session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif
<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required autofocus>
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
@endsection
