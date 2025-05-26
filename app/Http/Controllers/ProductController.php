<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('product.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'id_kategori' => 'required|exists:kategoris,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Product;
        $product->nama_produk = $request->nama_produk;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->id_kategori = $request->id_kategori;

        if($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/product', $name);
            $product->cover = $name;
        }

        $product->save(); 

        Alert::success('Berhasil!', 'Data Berhasil Ditambahkan');
        return redirect()->route('product.index');

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $kategoris = Kategori::all();
        $product = Product::findOrFail($id);
        return view('product.edit', compact('kategoris', 'product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'id_kategori' => 'required|exists:kategoris,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->nama_produk = $request->nama_produk;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->id_kategori = $request->id_kategori;

        if ($request->hasFile('cover')) {
            // Hapus gambar lama jika perlu
            if ($product->cover && file_exists(public_path('image/product/' . $product->cover))) {
                unlink(public_path('image/product/' . $product->cover));
            }

            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/product', $name);
            $product->cover = $name;
        }

        $product->save(); 

        Alert::success('Berhasil!', 'Data Berhasil Diubah');
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Hapus gambar juga jika ada
        if ($product->cover && file_exists(public_path('image/product/' . $product->cover))) {
            unlink(public_path('image/product/' . $product->cover));
        }

        $product->delete();
        Alert::warning('Dihapus!', 'Data Berhasil Dihapus');
        return redirect()->route('product.index');

    }
}
