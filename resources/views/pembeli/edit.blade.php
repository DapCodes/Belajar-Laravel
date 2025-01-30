@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Ubah | <u>{{$pembeli->nama}}</u></h3>
                  <a href="{{ route('pembeli.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}">
                            @error('nama_pembeli')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki Laki" 
                                {{ $pembeli->jenis_kelamin == 'Laki Laki' ? 'checked' : '' }}> 
                            <label style="margin-left: 3px;">Laki-laki</label>

                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" style="margin-left: 10px" 
                                {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}> 
                            <label style="margin-left: 3px;">Perempuan</label>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon }}">
                            @error('telepon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection