@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Detail Buku</h3>
                  <a href="{{ route('buku.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Buku</th>
                            <td>{{ $buku->nama_buku }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>{{ $buku->harga }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>{{ $buku->stok }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ asset('/image/buku/' . $buku->image) }}" alt="" style="width: 100px;"></td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>{{ $buku->penerbit->nama_penerbit }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td>{{ $buku->tanggal_terbit }}</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>{{ $buku->genre->genre }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection