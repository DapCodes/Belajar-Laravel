@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data Peserta pengguna</h3>
                  <a href="{{ route('pengguna.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengguna.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection