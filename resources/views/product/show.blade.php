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
                                <div class="panel-heading">
                                    Detail Data Produk
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        
                                    <div class="card">
                                        <div class="card-header" style="display: flex; justify-content:space-between;">
                                        </div>
                                        <div class="card-body">
                                            <form enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                                <div class="form-group mb-3">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama" value="{{ $product->nama_produk }}" disabled>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Harga</label>
                                                    <input type="text" class="form-control" name="nama" value="{{ $product->harga }}" disabled>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Stok</label>
                                                    <input type="text" class="form-control" name="nama" value="{{ $product->stok }}" disabled>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>ID kategori</label>
                                                    <select class="form-control" name="id_kategori" disabled>
                                                        <option>{{ $product->kategori->nama_kategori }}</option>
                                                    </select>
                                                </div> 
                                            </form>
                                            <a href="{{ route('product.index') }}">
                                                <button type="submit" class="btn btn-primary" name="submit">Back</button>
                                            </a>  
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





<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
</div> -->