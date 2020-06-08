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
                <div class="pt-3">
                    <h1 class="h1 mr-auto">Data Produksi {{ $result->nama_produk }}</h1>
                    <hr>
                    <ul>
                        <li>ID Produk : {{ $result->id_produk }}</li>
                        <li>Nama Produk : {{ $result->nama_produk }}</li>
                        <li>Jenis Produk : {{ $result->jenis_produk == 'B' ? 'Besar' : 'Kecil' }}</li>
                        <li>Keluar Produk : {{ $result->keluar_produk }}</li>
                        <li>Masuk Produk : {{ $result->masuk_produk }}</li>
                        <li>Nama Pengelola : {{ $result->nama_kelola_produk }}</li>
                        <li>NIK : {{ $result->nik_pengelola }}</li>
                        <li>Alamat Pengelola : {{ $result->alamat_pengelola }}</li>
                    </ul>
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>