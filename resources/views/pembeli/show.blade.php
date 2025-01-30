@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data pembeli<u>{{ $pembeli->nama }}</u></h3>
                  <a href="{{ route('pembeli.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group mb-3">   
                        <div class="form-group mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $pembeli->nama_pembeli }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki Laki" 
                                {{ $pembeli->jenis_kelamin == 'Laki Laki' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Laki-laki</label>

                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" style="margin-left: 10px" 
                                {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Perempuan</label>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $pembeli->telepon }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection