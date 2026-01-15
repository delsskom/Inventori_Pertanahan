<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="{{ asset('css/inventori.css') }}">
</head>
<body>

<h2>Tambah Barang</h2>

<div class="form-card">
    <form action="/barang" method="POST">
        @csrf

        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" placeholder="Contoh: BRG-001" required>
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" placeholder="Nama barang" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" placeholder="Elektronik / ATK" required>
        </div>

        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" placeholder="Ruang Arsip / Loket" required>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" min="1" required>
        </div>

        <div class="form-group">
            <label>Kondisi</label>
            <input type="text" name="kondisi" placeholder="Baik / Rusak" required>
        </div>

        <button type="submit" class="btn-save">💾 Simpan</button>
        <a href="/barang" class="btn-back">Batal</a>
    </form>
</div>

</body>
</html>
