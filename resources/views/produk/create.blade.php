@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data produk</h3>
                  <a href="{{ route('produk.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="name_product">
                            @error('name_product')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk">
                            @error('merk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Stock</label>
                            <input type="number" class="form-control" name="stock">
                            @error('merk')
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