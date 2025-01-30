@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data Transaksi</h3>
                  <a href="{{ route('transaksi.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                            @error('jumlah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi">
                            @error('tanggal_transaksi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Buku</label>
                            <select class="form-control" name="id_buku">
                                @foreach ($buku as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_buku }}</option>
                                @endforeach
                            </select>
                            @error('id_buku')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Pembeli</label>
                            <select class="form-control" name="id_pembeli">
                                @foreach ($pembeli as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_pembeli }}</option>
                                @endforeach
                            </select>
                            @error('id_pembeli')
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