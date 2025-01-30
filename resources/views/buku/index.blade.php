@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data buku</h3>
                  <a href="{{ route('buku.create') }}" class="btn btn-primary">ADD</a>
                </div>
                <div class="card-body">
                  @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                    <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Image</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider text-center">
                            @php $no = 1 @endphp
                            @foreach ($buku as $data)
                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$data->nama_buku}}</td>
                            <td>{{$data->harga}}</td>
                            <td>{{$data->stok}}</td>
                            <td>
                                <img style="width: 70px" src="{{ asset('/image/buku/' . $data->image) }}" alt="">
                            </td>
                            <td>{{$data->penerbit->nama_penerbit}}</td>
                            <td>{{$data->genre->genre}}</td>
                            <td style="display: flex; gap: 5px; position: relative; left:10px;">
                              <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-success">Edit</a>
                              <a href="{{ route('buku.show', $data->id) }}" class="btn btn-warning">Show</a>
                              <form action="{{ route('buku.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data milik {{$data->nama}} ?')">Delete</button>
                                </form>

                            </td>
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection