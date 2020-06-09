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
    
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Data Edit Produksi</h1>
                <hr>
                <form action="{{ route('products.update', $product->id_produk) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') ?? $product->nama_produk }}">
                        @error('nama_produk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_produk">Jenis Produk</label>
                        <select name="jenis_produk" id="jenis_produk" class="form-control" >
                            <option value="B" {{ (old('jenis_produk') ?? $product->jenis_produk ) == 'B' ? 'selected' : '' }}>
                                Diameter Besar
                            </option>
                            <option value="K" {{ (old('jenis_produk') ?? $product->jenis_produk)  == 'K' ? 'selected' : '' }}>
                                Diameter Kecil
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="masuk_produk">Masuk Produk</label>
                        <input type="datetime-local" class="form-control @error('masuk_produk') is-invalid @enderror" id="masuk_produk" name="masuk_produk" value="{{ old('masuk_produk') ?? $tgl_masuk }}">
                        @error('masuk_produk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keluar_produk">Keluar Produk</label>
                        <input type="datetime-local" class="form-control @error('keluar_produk') is-invalid @enderror" id="keluar_produk" name="keluar_produk" value="{{ old('keluar_produk') ?? $tgl_keluar }}">
                        @error('keluar_produk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_kelola_produk">Nama Pengelola</label>
                        <input type="text" class="form-control @error('nama_kelola_produk') is-invalid @enderror" id="nama_kelola_produk" name="nama_kelola_produk" value="{{ old('nama_kelola_produk') ?? $product->nama_kelola_produk }}">
                        @error('nama_kelola_produk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik_pengelola">NIK</label>
                        <input type="text" class="form-control @error('nik_pengelola') is-invalid @enderror" id="nik_pengelola" name="nik_pengelola" value="{{ old('nik_pengelola') ?? $product->nik_pengelola }}">
                        @error('nik_pengelola')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_pengelola">Alamat</label>
                        <textarea class="form-control" name="alamat_pengelola" id="alamat_pengelola" rows="3">{{ old('alamat_pengelola') ?? $product->alamat_pengelola }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>