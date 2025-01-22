@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data Customer</u></h3>
                  <a href="{{ route('customer.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name Customer</label>
                            <input type="text" class="form-control" name="nis" value="{{ $customer->name_customer }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Gender</label><br>
                            <input type="radio" class="form-check-input" name="gender" value="Laki - Laki" 
                                {{ $customer->gender == 'Laki - Laki' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Laki - Laki</label>

                            <input type="radio" class="form-check-input" name="gender" value="Perempuan" style="margin-left: 10px" 
                                {{ $customer->gender == 'Perempuan' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Perempuan</label>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Contact</label>
                            <input type="text" class="form-control" name="nis" value="{{ $customer->contact }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection