@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Edit Data Buku</h3>
                  <a href="{{ route('buku.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}">
                            @error('nama_buku')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $buku->harga }}">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}">
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset('/image/buku/' . $buku->image) }}" alt="" style="width: 100px; margin-top: 10px;">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Penerbit</label>
                            <select class="form-control" name="id_penerbit">
                                @foreach ($penerbit as $penerbits)
                                    <option value="{{ $penerbits->id }}" {{ $buku->id_penerbit == $penerbits->id ? 'selected' : '' }}>{{ $penerbits->nama_penerbit }}</option>
                                @endforeach
                            </select>
                            @error('id_penerbit')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}">
                            @error('tanggal_terbit')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Genre</label>
                            <select class="form-control" name="id_genre">
                                @foreach ($genre as $genres)
                                    <option value="{{ $genres->id }}" {{ $buku->id_genre == $genres->id ? 'selected' : '' }}>{{ $genres->genre }}</option>
                                @endforeach
                            </select>
                            @error('genre')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection