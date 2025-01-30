@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data buku</h3>
                  <a href="{{ route('buku.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="nama_buku">
                            @error('nama_buku')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok">
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Penerbit</label>
                            <select class="form-control" name="id_penerbit">
                                @foreach ($penerbit as $penerbits)
                                    <option value="{{ $penerbits->id }}">{{ $penerbits->nama_penerbit }}</option>
                                @endforeach
                            </select>
                            @error('id_penerbit')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group mb-3">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit">
                            @error('tanggal_terbit')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group mb-3">
                            <label>ID kategori</label>
                            <select class="form-control" name="id_genre">
                                @foreach ($genre as $genres)
                                    <option value="{{ $genres->id }}">{{ $genres->genre }}</option>
                                @endforeach
                            </select>
                            @error('id_genre')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection