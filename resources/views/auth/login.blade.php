@extends('layouts.app')

@section('styles')
<style>
  * {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
  }

  body {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    color: white;
    text-align: center;
  }

  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 1rem;
    width: 100%;
    max-width: 400px;
  }

  .welcome-text {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
  }

  .login-card {
    background: rgba(255, 255, 255, 0.1);
    padding: 40px 30px;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    width: 100%;
    text-align: left;
    color: white;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
  }

  .login-card h1 {
    text-align: center;
    margin-bottom: 24px;
    font-weight: 700;
    color: white;
  }

  .form-label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: white;
  }

  .form-control {
    border-radius: 12px;
    padding: 12px 16px;
    width: 100%;
    border: 1px solid rgba(255,255,255,0.5);
    margin-bottom: 20px;
    background: transparent;
    color: white;
    font-size: 1rem;
  }

  .form-control::placeholder {
    color: rgba(255,255,255,0.7);
  }

  .form-control:focus {
    border-color: #fff;
    outline: none;
    background: rgba(255,255,255,0.1);
  }

  .btn-login {
    background: #fff;
    color: #2575fc;
    font-weight: 700;
    border: none;
    padding: 12px;
    border-radius: 16px;
    width: 100%;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
  }

  .btn-login:hover {
    background: #e0e0e0;
  }

  .text-danger {
    font-size: 0.875rem;
    margin-top: -15px;
    margin-bottom: 15px;
    color: #ff6b6b;
  }
</style>
@endsection

@section('content')
<div class="container">
  <h1 class="welcome-text">Welcome to PerpusBerdua</h1>

  <div class="login-card">
    <h1>Login Admin</h1>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <label for="email" class="form-label">Email</label>
      <input 
        type="email" 
        name="email" 
        id="email" 
        class="form-control" 
        required 
        value="{{ old('email') }}"
        placeholder="Masukkan email"
        autofocus
      >
      @error('email')
        <div class="text-danger">{{ $message }}</div>
      @enderror

      <label for="password" class="form-label">Password</label>
      <input 
        type="password" 
        name="password" 
        id="password" 
        class="form-control" 
        required
        placeholder="Masukkan password"
      >
      @error('password')
        <div class="text-danger">{{ $message }}</div>
      @enderror

      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>
</div>
@endsection
