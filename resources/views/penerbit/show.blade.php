@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data | <u>{{ $penerbit->nama_penerbit }}</u></h3>
                  <a href="{{ route('penerbit.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $penerbit->nama_penerbit }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection