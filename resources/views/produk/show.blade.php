@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data Produk</u></h3>
                  <a href="{{ route('produk.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="nis" value="{{ $produk->name_product }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="nis" value="{{ $produk->merk }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="text" class="form-control" name="nis" value="{{ $produk->price }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Stock</label>
                            <input type="text" class="form-control" name="nis" value="{{ $produk->stock }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection