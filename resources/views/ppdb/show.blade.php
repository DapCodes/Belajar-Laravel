@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data | {{$ppdb->nama_lengkap}}</h3>
                  <a href="{{ route('ppdb.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $ppdb->nama_lengkap }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki Laki" 
                                {{ $ppdb->jenis_kelamin == 'Laki Laki' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Laki-laki</label>

                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" style="margin-left: 10px" 
                                {{ $ppdb->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Perempuan</label>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Agama</label><br>
                            <select class="form-control" name="agama" disabled>
                                <option value="Islam">{{ $ppdb->agama }}</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                                <option value="Katholik">Katholik</option>
                            </select>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <textarea class="form-control" id="floatingTextarea" name="alamat" disabled>{{ $ppdb->alamat }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon" value="{{ $ppdb->telepon }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" value="{{ $ppdb->asal_sekolah }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection