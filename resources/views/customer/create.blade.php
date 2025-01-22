@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data Customer</h3>
                  <a href="{{ route('customer.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Name Customer</label>
                            <input type="text" class="form-control" name="name_customer">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Gender</label><br>
                            <input type="radio" class="form-check-input" id="laki" name="gender" value="Laki - Laki"> <label style="margin-left: 3px;" for="laki">Laki - Laki</label>
                            <input type="radio" class="form-check-input" id="cw" name="gender" value="Perempuan" style="margin-left: 10px"> <label style="margin-left: 3px;" for="cw">Perempuan</label>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Contact</label>
                            <input type="text" class="form-control" name="contact">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection