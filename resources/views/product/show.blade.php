@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data | <u>{{ $product->nama }}</u></h3>
                  <a href="{{ route('product.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $product->nama_produk }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="nama" value="{{ $product->harga }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="nama" value="{{ $product->stok }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>ID kategori</label>
                            <select class="form-control" name="id_kategori" disabled>
                                <option>{{ $product->kategori->nama_kategori }}</option>
                            </select>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection