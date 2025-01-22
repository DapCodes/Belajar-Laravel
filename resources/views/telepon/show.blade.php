@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data Telepon<u>{{ $telepon->nama }}</u></h3>
                  <a href="{{ route('telepon.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nama" value="{{ $telepon->nomor }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>ID Pengguna</label><br>
                            <select class="form-control" name="kelas" disabled>
                                <option value="XI RPL 1">{{ $telepon->pengguna->nama }}</option>
                            </select>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection