<!DOCTYPE html>
<html>
<head>
    <title>Inventori Barang</title>
    <link rel="stylesheet" href="{{ asset('css/inventori.css') }}">
</head>
<body>

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
            <a href="/barang/{{ $b->id }}/edit" class="action-btn btn-edit">Edit</a>

            <form action="/barang/{{ $b->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="action-btn btn-delete" type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
