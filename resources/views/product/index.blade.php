<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Samudera Berlian Metalindo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                <h2>Daftar Produk</h2>
                    <a href="{{ route('products.create') }}" class="btn btn-warning">Tambah Produk</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Keluar Produk</th>
                            <th>Masuk Produk</th>
                            <th>Nama Pengelola</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('products.show', $product->id_produk) }}">{{ $product->id_produk }}</a></td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ $product->jenis_produk == 'K' ? 'Kecil' : 'Besar' }}</td>
                                <td>{{ $product->keluar_produk }}</td>
                                <td>{{ $product->masuk_produk }}</td>
                                <td>{{ $product->nama_kelola_produk }}</td>
                                <td>{{ $product->nik_pengelola }}</td>
                                <td>{{ $product->alamat_pengelola }}</td>
                                <td><a href="{{ route('products.edit', $product->id_produk) }}" class="btn btn-success">Update</a></td>
                            </tr>
                        @empty
                        <td colspan="5" class="text-center">Data Kosong</td>    
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>