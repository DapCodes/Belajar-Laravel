@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data Order<u>{{ $order->nama }}</u></h3>
                  <a href="{{ route('order.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group mb-3">
                        <label>ID Product</label>
                        <select class="form-control" name="id_pengguna" disabled>
                            @foreach ($produks as $produk)
                                <option value="{{ $produk->id }}" 
                                    {{ $produk->id == $order->id_produk ? 'selected' : '' }}>
                                    {{ $produk->name_product }}
                                </option>
                            @endforeach
                        </select>
                        </div>     
                        <div class="form-group mb-3">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{ $order->quantity }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Order Date</label>
                            <input type="date" class="form-control" name="order_date" value="{{ $order->order_date }}" disabled>
                        </div>   
                        <div class="form-group mb-3">
                            <label>ID Customer</label>
                            <select class="form-control" name="id_pengguna" disabled>
                                @foreach ($customer as $customers)
                                    <option value="{{ $customers->id }}" 
                                        {{ $customers->id == $order->id_customer ? 'selected' : '' }}>
                                        {{ $customers->name_customer }}
                                    </option>
                                @endforeach
                            </select>
                        </div>                 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection