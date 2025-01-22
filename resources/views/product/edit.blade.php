@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Ubah Data</h3>
                  <a href="{{ route('product.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $product->harga }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $product->stok }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>ID kategori</label>
                            <select class="form-control" name="id_kategori">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}" 
                                        {{ $kategori->id == $product->id_kategori ? 'selected' : '' }}>
                                        {{ $kategori->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>                          
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection