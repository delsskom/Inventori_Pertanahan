<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Barang</title>

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
            background: rgba(0,0,0,0.6);
            z-index: -1;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 40px;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(12px);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
        }

        .container {
            display: flex;
            justify-content: center;
            padding: 80px 20px;
        }

        .card {
            background: rgba(255,255,255,0.18);
            backdrop-filter: blur(14px);
            padding: 40px;
            border-radius: 22px;
            max-width: 520px;
            width: 100%;
            text-align: center;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
        }

        h2 {
            margin-bottom: 15px;
            color: #ff7675;
        }

        .info {
            margin: 20px 0;
            text-align: left;
            font-size: 14px;
        }

        .info p {
            margin: 6px 0;
        }

        .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .btn-delete {
            flex: 1;
            background: #e74c3c;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-delete:hover {
            background: #c0392b;
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

<div class="navbar">
    <h1>Inventori Barang</h1>
    <div>
        <a href="/">Beranda</a>
        <a href="/barang">Data Barang</a>
    </div>
</div>

<div class="container">
    <div class="card">
        <h2>⚠️ Hapus Barang</h2>

        <p>Apakah kamu yakin ingin menghapus barang berikut?</p>

        <div class="info">
            <p><strong>Kode:</strong> {{ $barang->kode_barang }}</p>
            <p><strong>Nama:</strong> {{ $barang->nama_barang }}</p>
            <p><strong>Kategori:</strong> {{ $barang->kategori }}</p>
            <p><strong>Lokasi:</strong> {{ $barang->lokasi }}</p>
            <p><strong>Jumlah:</strong> {{ $barang->jumlah }}</p>
            <p><strong>Kondisi:</strong> {{ $barang->kondisi }}</p>
        </div>

        <form action="/barang/{{ $barang->id }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="btn-group">
                <button type="submit" class="btn-delete">Ya, Hapus</button>
                <a href="/barang" class="btn-back">Batal</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
