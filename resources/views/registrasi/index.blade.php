@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h3>Halaman Registrasi</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpan-registrasi') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                            @if (count($errors) > 0)
                                <div style="width:auto; color:red; margin-top:0.25rem;">
                                    {{ $errors->first('username') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                            @if (count($errors) > 0)
                            <div style="width:auto; color:red; margin-top:0.25rem;">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        </div>                     
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection