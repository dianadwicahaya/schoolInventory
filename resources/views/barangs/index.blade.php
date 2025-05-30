@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('styles')
<style>
  @section('styles')
<style>
  /@section('styles')
<style>
  /* Card dengan background gradient */
  .gradient-card {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
  }

  /* Header card: judul dan tombol di satu baris */
  .gradient-card > div.d-flex {
    gap: 1rem;
  }

  /* Judul dan tombol tambah di header card */
  .gradient-card h2 {
    color: white;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
  }

  /* Tombol tambah barang */
  .btn-tambah {
    border-radius: 50px !important;
    font-weight: 700 !important;
    padding-left: 1.5rem !important;
    padding-right: 1.5rem !important;
    background-color: white !important;
    color: #6a11cb !important; /* ungu */
    box-shadow: 0 4px 12px rgb(106 17 203 / 0.3);
    border: none !important;
  }
  .btn-tambah:hover {
    background-color: #f0e7ff !important;
    color: #4a0fa9 !important;
  }

  /* Table container tetap putih */
  .table-responsive {
    background: white;
    border-radius: 12px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
  }

  /* Tombol edit: warna putih background ungu text */
  .btn-edit {
    border-radius: 20px !important;
    font-weight: 600 !important;
    background-color: #6a11cb !important;
    color: white !important;
    border: none !important;
    padding-left: 0.8rem !important;
    padding-right: 0.8rem !important;
  }
  .btn-edit:hover {
    background-color: #4a0fa9 !important;
    color: white !important;
  }

  /* Tombol hapus: merah transparent dengan border */
  .btn-delete {
    border-radius: 20px !important;
    font-weight: 600 !important;
    background-color: rgba(220,53,69,0.1) !important;
    color: #dc3545 !important;
    border: 1.5px solid #dc3545 !important;
    padding-left: 0.8rem !important;
    padding-right: 0.8rem !important;
  }
  .btn-delete:hover {
    background-color: #dc3545 !important;
    color: white !important;
  }
</style>
@endsection

</style>
@endsection

</style>
@endsection

@section('content')
<div class="container py-4" style="text-align: center;">
  <h1>
    Hai, 
    <span style="
      background: linear-gradient(to right, #6a11cb, #2575fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
    ">
      {{ auth()->user()->name }}
    </span>!
  </h1>
  <p>Selamat datang di sistem inventaris Anda.</p>
</div>


<div class="container py-4">
  <div class="gradient-card mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="mb-0 fw-bold">Daftar Barang</h2>
      <a href="{{ route('barangs.create') }}" class="btn btn-light text-primary fw-semibold shadow-sm">
        + Tambah Barang
      </a>
    </div>

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
  </div>

  <div class="table-responsive shadow-sm rounded">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th>Nama</th>
          <th>Kode</th>
          <th>Stok</th>
          <th>Kategori</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($barangs as $barang)
          <tr>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->kode }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->kategori }}</td>
            <td class="text-center">
              <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-sm btn-outline-warning me-1" title="Edit">
                <i class="bi bi-pencil"></i> Edit
              </a>
              <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus">
                  <i class="bi bi-trash"></i> Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center text-muted">Belum ada data barang.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
