<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Samudera Berlian Metalindo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body style="overflow-x: hidden">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h5 style="margin-right:-370px; margin-top:5px;"><?php include 'waktu.php';?></h5>
                <div class="pt-4 pb-2">
                <h2>Daftar Product</h2>
                    <a href="{{ route('products.create') }}" class="btn btn-warning mb-0">Tambah Product</a>
                    @if (Session('status'))
                    <div class="alert alert-primary alert-dismissible fade show mt-1 mb-0" role="alert">
                        Data <strong>{{ Session('message') }}</strong> Berhasil Di{{ Session('status') }}!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Product</th>
                            <th>Product Masuk</th>
                            <th>Product Keluar</th>
                            <th>Pengelola</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->nama_produk }}</td>
                            <td>{{ $product->masuk_produk }}</td>
                            <td>{{ $product->keluar_produk }}</td>
                            <td>{{ $product->nama_kelola_produk }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id_produk) }}" class="btn btn-sm btn-success">Detail</a>
                                <form action="{{ route('products.destroy', $product->id_produk) }}" method="post" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                <div class="alert alert-primary mb-0" role="alert">Product Tidak Ditemukan!</div>
                            </td>
                        </tr>    
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>