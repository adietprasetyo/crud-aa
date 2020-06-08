<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_produk'=>'required|min:3|max:100',
            'jenis_produk'=>'required|in:K,B',
            'keluar_produk'=>'required',
            'masuk_produk'=>'required',
            'nama_kelola_produk'=>'required|min:3|max:100',
            'nik_pengelola' => 'required|size:8',
            'alamat_pengelola'=>''
        ]);
        $product = new Product();
        $product->nama_produk = $validatedData['nama_produk'];
        $product->jenis_produk = $validatedData['jenis_produk'];
        $product->keluar_produk = $validatedData['keluar_produk'];
        $product->masuk_produk = $validatedData['masuk_produk'];
        $product->nama_kelola_produk = $validatedData['nama_kelola_produk'];
        $product->nik_pengelola = $validatedData['nik_pengelola'];
        $product->alamat_pengelola = $validatedData['alamat_pengelola'];
        $product->save();
        return "Data berhasil disimpan";
        // dump($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $result = Product::find($product);
        return view('product.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $result = Product::find($product);
        return view('product.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $validatedData = $request->validate([
            'nama_produk'=>'required|min:3|max:100',
            'jenis_produk'=>'required|in:K,B',
            'keluar_produk'=>'required',
            'masuk_produk'=>'required',
            'nama_kelola_produk'=>'required|min:3|max:100',
            'nik_pengelola' => 'required|size:8',
            'alamat_pengelola'=>''
        ]);
        $product = new Product();
        $product->nama_produk = $validatedData['nama_produk'];
        $product->jenis_produk = $validatedData['jenis_produk'];
        $product->keluar_produk = $validatedData['keluar_produk'];
        $product->masuk_produk = $validatedData['masuk_produk'];
        $product->nama_kelola_produk = $validatedData['nama_kelola_produk'];
        $product->nik_pengelola = $validatedData['nik_pengelola'];
        $product->alamat_pengelola = $validatedData['alamat_pengelola'];
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index')->with('pesan', "Hapus data $product->nama_produk Berhasil");
    }
}
