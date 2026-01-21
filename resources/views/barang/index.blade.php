<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventori Barang</title>

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
            font-weight: bold;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-size: 14px;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #f9ca24;
        }

        /* CONTENT */
        .container {
            padding: 40px;
        }

        .card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(14px);
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            margin-top: 0;
            margin-bottom: 25px;
        }

        /* BUTTON */
        .btn-add {
            display: inline-block;
            background: #888f05;
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-add:hover {
            background: #888f05;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 14px;
        }

        table th, table td {
            padding: 14px;
            text-align: center;
            font-size: 14px;
        }

        table th {
            background: rgba(0,0,0,0.6);
        }

        table tr:nth-child(even) {
            background: rgba(255,255,255,0.08);
        }

        table tr:hover {
            background: rgba(255,255,255,0.15);
        }

        /* ACTION BUTTONS */
        .action-group {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .action-btn {
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 13px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .btn-edit {
            background: #3498db;
        }

        .btn-edit:hover {
            background: #2980b9;
        }

        .btn-delete {
            background: #e74c3c;
        }

        .btn-delete:hover {
            background: #c0392b;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            font-size: 13px;
            opacity: 0.8;
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
        <a href="/barang/create">Tambah Barang</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">
    <div class="card">

        <h2>Data Inventori Barang</h2>

        <a href="/barang/create" class="btn-add">+ Tambah Barang</a>

        <table>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>

            @foreach($barang as $b)
            <tr>
                <td>{{ $b->kode_barang }}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->kategori }}</td>
                <td>{{ $b->lokasi }}</td>
                <td>{{ $b->jumlah }}</td>
                <td>{{ $b->kondisi }}</td>
                <td>
                    <div class="action-group">
                        <a href="/barang/{{ $b->id }}/edit" class="action-btn btn-edit">Edit</a>

                        <form action="/barang/{{ $b->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="action-btn btn-delete" type="submit"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

</body>
</html>
