@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data Siswa</h3>
                  <a href="{{ route('siswa.create') }}" class="btn btn-primary">ADD</a>
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
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider text-center">
                            @php $no = 1 @endphp
                            @foreach ($siswa as $data)
                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>
                                <img style="width: 70px" src="{{ asset('/image/siswa/' . $data->cover) }}" alt="">
                            </td>
                            <td style="display: flex; gap: 5px; position: relative; left:10px;">
                              <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-success">Edit</a>
                              <a href="{{ route('siswa.show', $data->id) }}" class="btn btn-warning">Show</a>
                              <form action="{{ route('siswa.destroy', $data->id) }}" method="POST">
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