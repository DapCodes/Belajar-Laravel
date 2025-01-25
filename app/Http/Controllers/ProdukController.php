<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Tambahkan validasi di sini
        $request->validate([
            'name_product' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ], [
            // Pesan error (opsional, default dari Laravel juga bisa dipakai)
            'name_product.required' => 'Nama produk harus diisi.',
            'merk.required' => 'Merk produk harus diisi.',
            'price.required' => 'Harga produk harus diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'stock.required' => 'Stok produk harus diisi.',
            'stock.integer' => 'Stok produk harus berupa angka bulat.',
        ]);

        // Jika validasi lolos, data akan diproses
        $produk = new Produk;
        $produk->name_product = $request->name_product;
        $produk->merk = $request->merk;
        $produk->price = $request->price;
        $produk->stock = $request->stock;

        $produk->save(); 

        return redirect()->route('produk.index')->with('success', 'Data Berhasil Ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::FindOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::FindOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_product' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ], [
            // Pesan error (opsional, default dari Laravel juga bisa dipakai)
            'name_product.required' => 'Nama produk harus diisi.',
            'merk.required' => 'Merk produk harus diisi.',
            'price.required' => 'Harga produk harus diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'stock.required' => 'Stok produk harus diisi.',
            'stock.integer' => 'Stok produk harus berupa angka bulat.',
        ]);
        
        $produk = Produk::findOrFail($id);
        $produk->name_product = $request->name_product;
        $produk->merk = $request->merk;
        $produk->price = $request->price;
        $produk->stock = $request->stock;       
        
        $produk->save(); 

        return redirect()->route('produk.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Dihapus');
    }
}
