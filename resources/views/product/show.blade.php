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
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h1 mr-auto">Data Produksi {{ $product->nama_produk }}</h1>
                    <a href="{{ route('products.edit', $product->id_produk) }}" class="btn btn-primary mr-1">Update</a>
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Kembali</a>
                </div>
                <hr>
                <ul>
                    <li>ID Produk : {{ $product->id_produk }}</li>
                    <li>Nama Produk : {{ $product->nama_produk }}</li>
                    <li>Jenis Produk : {{ $product->jenis_produk == 'B' ? 'Besar' : 'Kecil' }}</li>
                    <li>Keluar Produk : {{ $product->keluar_produk }}</li>
                    <li>Masuk Produk : {{ $product->masuk_produk }}</li>
                    <li>Nama Pengelola : {{ $product->nama_kelola_produk }}</li>
                    <li>NIK : {{ $product->nik_pengelola }}</li>
                    <li>Alamat Pengelola : {{ $product->alamat_pengelola }}</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>