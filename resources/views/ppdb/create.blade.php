@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Tambah Data Peserta PPDB</h3>
                  <a href="{{ route('ppdb.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_lengkap">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki Laki"> <label style="margin-left: 3px;">Laki-laki</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" style="margin-left: 10px"> <label style="margin-left: 3px;">Perempuan</label>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Agama</label><br>
                            <select class="form-control" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                                <option value="Katholik">Katholik</option>
                            </select>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <textarea class="form-control" id="floatingTextarea" name="alamat"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon">
                        </div>
                        <div class="form-group mb-3">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection