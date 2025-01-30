@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data | <u>{{ $genre->genre }}</u></h3>
                  <a href="{{ route('genre.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('genre.update', $genre->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $genre->genre }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection