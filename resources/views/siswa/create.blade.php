<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('admin/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('admin/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('admin/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- NAVIGATION -->
                @include('layouts.part.navbar')
            <!-- END NAVOGATION -->

            <!-- SIDE BAR -->
                @include('layouts.part.sidebar')
            <!-- END SIDE BAR -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Siswa</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tambah Data Siswa
                                </div>
                                <div class="panel-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header" style="display: flex; justify-content:space-between;">
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group mb-3">
                                                    <label>NIS</label>
                                                    <input type="number" class="form-control" name="nis">
                                                </div>
                                                @error('nis')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group mb-3">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama">
                                                </div>
                                                @error('nama')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group mb-3">
                                                    <label>Jenis Kelamin</label><br>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki Laki" checked>Laki Laki
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="Perempuan">Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                                @error('jenis_kelamin')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group mb-3">
                                                    <label>Kelas</label><br>
                                                    <select class="form-control" name="kelas">
                                                        <option value="XI RPL 1">XI RPL 1</option>
                                                        <option value="XI RPL 2">XI RPL 2</option>
                                                        <option value="XI RPL 3">XI RPL 3</option>
                                                    </select>
                                                </div> 
                                                @error('kelas')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group mb-3">
                                                    <label>Cover</label>
                                                    <input type="file" class="form-control" name="cover">
                                                </div>
                                                @error('cover')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>
                <!-- /.container-fluid -->
                    </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('admin/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('admin/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('admin/js/raphael.min.js')}}"></script>
        <script src="{{asset('admin/js/morris.min.js')}}"></script>
        <script src="{{asset('admin/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('admin/js/startmin.js')}}"></script>

    </body>

</html>

