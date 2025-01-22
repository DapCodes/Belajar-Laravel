@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data Telepon</h3>
                  <a href="{{ route('telepon.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('telepon.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor">
                        </div>
                        <div class="form-group mb-3">
                            <label>ID Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                @foreach ($penggunas as $pengguna)
                                    <option value="{{ $pengguna->id }}">{{ $pengguna->nama }}</option>
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