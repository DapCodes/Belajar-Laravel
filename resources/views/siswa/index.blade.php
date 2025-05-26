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
                                <div class="panel-heading" style="display: flex; justify-content:space-between;">
                                    <p style="position: relative; top: 7px;">Data Siswa</p>
                                    <a href="{{ route('siswa.create') }}" class="btn btn-primary">ADD</a>
                                </div>
                                @include('sweetalert::alert')
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
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
                                            <tbody>
                                              @php $no = 1 @endphp
                                              @foreach ($siswa as $data)
                                            <tr>
                                              <th scope="row">{{$no++}}</th>
                                              <td>{{$data->nis}}</td>
                                              <td>{{$data->nama}}</td>
                                              <td>{{$data->jenis_kelamin}}</td>
                                              <td>{{$data->kelas}}</td>
                                              <td>
                                                  <img style="width: 50px" src="{{ asset('/image/siswa/' . $data->cover) }}" alt="">
                                              </td>
                                              <td style="display: flex; gap: 2px;">
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
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
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