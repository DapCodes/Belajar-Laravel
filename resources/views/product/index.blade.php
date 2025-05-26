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
                            <h1 class="page-header">Produk</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="display: flex; justify-content:space-between;">
                                    <p style="position: relative; top: 7px;">Data Produk</p>
                                    <a href="{{ route('product.create') }}" class="btn btn-primary">ADD</a>
                                </div>
                                @include('sweetalert::alert')
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama Product</th>
                                          <th scope="col">Harga</th>
                                          <th scope="col">Stok</th>
                                          <th scope="col">ID Kategori</th>
                                          <th scope="col">Cover</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="table-group-divider">
                                          @php $no = 1 @endphp
                                          @foreach ($product as $data)
                                        <tr>
                                          <th scope="row">{{$no++}}</th>
                                          <td>{{$data->nama_produk}}</td>
                                          <td>{{$data->harga}}</td>
                                          <td>{{$data->stok}}</td>
                                          <td>{{$data->kategori->nama_kategori}}</td>
                                          <td>
                                              <img style="width: 70px;" src="{{ asset('/image/product/' . $data->cover) }}" alt="">
                                          </td>
                                          <td style="display: flex; gap: 5px;">
                                            <a href="{{ route('product.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('product.show', $data->id) }}" class="btn btn-warning">Show</a>
                                            <form action="{{ route('product.destroy', $data->id) }}" method="POST">
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


<!-- <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data product</h3>
                  <a href="{{ route('product.create') }}" class="btn btn-primary">ADD</a>
                </div>
                <div class="card-body">
                  @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                    
                </div>
            </div>
        </div>
    </div> -->