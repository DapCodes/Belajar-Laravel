@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data Siswa</h3>
                  <a href="{{ route('ppdb.create') }}" class="btn btn-primary">ADD</a>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider text-center">
                            @php $no = 1 @endphp
                            @foreach ($ppdb as $data)
                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$data->nama_lengkap}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->agama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->telepon}}</td>
                            <td>{{$data->asal_sekolah}}</td>
                            <td style="display: flex; gap: 5px; position: relative; left:10px;">
                              <a href="{{ route('ppdb.edit', $data->id) }}" class="btn btn-success">Edit</a>
                              <a href="{{ route('ppdb.show', $data->id) }}" class="btn btn-warning">Show</a>
                              <form action="{{ route('ppdb.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data milik {{$data->nama_lengkap}} ?')">Delete</button>
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