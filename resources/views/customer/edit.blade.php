@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Ubah Data</u></h3>
                  <a href="{{ route('customer.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Gender</label> <br>
                            <input type="radio" class="form-check-input" name="gender" value="Laki Laki" 
                                {{ $customer->gender == 'Laki - Laki' ? 'checked' : '' }}> 
                            <label style="margin-left: 3px;">Laki - laki</label>

                            <input type="radio" class="form-check-input" name="gender" value="Perempuan" style="margin-left: 10px" 
                                {{ $customer->gender == 'Perempuan' ? 'checked' : '' }}> 
                            <label style="margin-left: 3px;">Perempuan</label>
                        </div>
                        <div class="form-group mb-3">
                            <label>Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $customer->contact }}">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection