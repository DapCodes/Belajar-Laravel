<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Pembeli;
use App\Models\Penerbit;
use App\Models\Transaksi;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.create', compact('buku','penerbit','genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'id_penerbit' => 'required|exists:penerbits,id',
            'tanggal_terbit' => 'required|date',
            'id_genre' => 'required|exists:genres,id',
        ]);

        $buku = new Buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/buku', $name);
            $buku->image = $name;
        }

        $buku->id_penerbit= $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre;

        $buku->save();
        
        return redirect()->route('buku.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.show', compact('buku','penerbit','genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.edit', compact('buku','penerbit','genre'));
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
            'nama_buku' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'id_penerbit' => 'required|exists:penerbits,id',
            'tanggal_terbit' => 'required|date',
            'id_genre' => 'required|exists:genres,id',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/buku', $name);
            $buku->image = $name;
        }

        $buku->id_penerbit= $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre;
        $buku->save();
        
        return redirect()->route('buku.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus');
    }
}
