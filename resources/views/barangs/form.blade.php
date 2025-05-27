<div class="mb-3">
    <label>Nama Barang</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $barang->nama ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Kode Barang</label>
    <input type="text" name="kode" class="form-control" value="{{ old('kode', $barang->kode ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Stok</label>
    <input type="number" name="stok" class="form-control" value="{{ old('stok', $barang->stok ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $barang->kategori ?? '') }}" required>
</div>
