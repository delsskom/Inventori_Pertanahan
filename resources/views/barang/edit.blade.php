<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background-image: url('/images/atr.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.55);
            z-index: -1;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 40px;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(12px);
        }

        .navbar h1 {
            font-size: 20px;
            margin: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-size: 14px;
        }

        .navbar a:hover {
            color: #f9ca24;
        }

        /* CONTENT */
        .container {
            display: flex;
            justify-content: center;
            padding: 50px 20px;
        }

        .form-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(14px);
            padding: 40px;
            border-radius: 22px;
            width: 100%;
            max-width: 520px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .form-group input:focus {
            box-shadow: 0 0 0 2px #f9ca24;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn-save {
            flex: 1;
            background: #f9ca24;
            color: #2c3e50;
            padding: 12px;
            border: none;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-save:hover {
            background: #f6b93b;
        }

        .btn-back {
            flex: 1;
            background: #bdc3c7;
            color: #2c3e50;
            padding: 12px;
            border-radius: 12px;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
        }

        .btn-back:hover {
            background: #ecf0f1;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <h1>Inventori Barang</h1>
    <div>
        <a href="/">Beranda</a>
        <a href="/barang">Data Barang</a>
    </div>
</div>

<!-- FORM -->
<div class="container">
    <div class="form-card">

        <h2>Edit Barang</h2>

        <form action="/barang/{{ $barang->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" required>
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" value="{{ $barang->kategori }}" required>
            </div>

            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" value="{{ $barang->lokasi }}" required>
            </div>

            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" name="jumlah" min="1" value="{{ $barang->jumlah }}" required>
            </div>

            <div class="form-group">
                <label>Kondisi</label>
                <input type="text" name="kondisi" value="{{ $barang->kondisi }}" required>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-save">Update</button>
                <a href="/barang" class="btn-back">Batal</a>
            </div>
        </form>

    </div>
</div>

</body>
</html>
