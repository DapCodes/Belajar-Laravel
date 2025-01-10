<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $ppdb = Ppdb::all();
        return view('ppdb.index', compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdn = new Ppdb;
        $ppdn->nama_lengkap = $request->nama_lengkap;
        $ppdn->jenis_kelamin = $request->jenis_kelamin; 
        $ppdn->agama = $request->agama; 
        $ppdn->alamat = $request->alamat; 
        $ppdn->telepon = $request->telepon; 
        $ppdn->asal_sekolah = $request->asal_sekolah; 
        $ppdn->save(); 

        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        return view('ppdb.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
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
        $ppdn = Ppdb::findOrFail($id);
        $ppdn->nama_lengkap = $request->nama_lengkap;
        $ppdn->jenis_kelamin = $request->jenis_kelamin; 
        $ppdn->agama = $request->agama; 
        $ppdn->alamat = $request->alamat; 
        $ppdn->telepon = $request->telepon; 
        $ppdn->asal_sekolah = $request->asal_sekolah; 
        $ppdn->save(); 

        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Dihapus');
    }
}
