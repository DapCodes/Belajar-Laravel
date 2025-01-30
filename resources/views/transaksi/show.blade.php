@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Detail Transaksi</h3>
                  <a href="{{ route('transaksi.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Jumlah</th>
                            <td>{{ $transaksi->jumlah }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Transaksi</th>
                            <td>{{ $transaksi->tanggal_transaksi }}</td>
                        </tr>
                        <tr>
                            <th>Buku</th>
                            <td>{{ $transaksi->buku->nama_buku }}</td>
                        </tr>
                        <tr>
                            <th>Pembeli</th>
                            <td>{{ $transaksi->pembeli->nama_pembeli }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection