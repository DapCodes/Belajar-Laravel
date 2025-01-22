@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Ubah Data</h3>
                  <a href="{{ route('telepon.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>ID Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                @foreach ($penggunas as $pengguna)
                                    <option value="{{ $pengguna->id }}" 
                                        {{ $pengguna->id == $telepon->id_pengguna ? 'selected' : '' }}>
                                        {{ $pengguna->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>                          
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection