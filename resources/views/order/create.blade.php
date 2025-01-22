@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data Order</h3>
                  <a href="{{ route('order.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>ID Product</label>
                            <select class="form-control" name="id_product">
                                @foreach ($produks as $produk)
                                    <option value="{{ $produk->id }}">{{ $produk->name_product }}</option>
                                @endforeach
                            </select>
                        </div>                        
                        <div class="form-group mb-3">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                        <div class="form-group mb-3">
                            <label>Order Date</label>
                            <input type="date" class="form-control" name="order_date">
                        </div>
                        <div class="form-group mb-3">
                            <label>ID Customer</label>
                            <select class="form-control" name="id_customer">
                                @foreach ($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
                                @endforeach
                            </select>
                        </div>   
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection