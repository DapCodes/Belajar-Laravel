<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark {
            background-color: #1a202c;
            color: #e2e8f0;
        }

        .light {
            background-color: #f7fafc;
            color: #2d3748;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: linear-gradient(135deg, #2d3748, #4a5568);
            color: #cbd5e0;
            position: fixed;
            transition: width 0.3s ease;
            overflow: hidden;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar.collapsed {
            width: 50px;
        }

        .sidebar h1 {
            font-size: 1.8rem;
            margin: 1rem;
            display: flex;
            align-items: center;
        }

        .sidebar h1 i {
            margin-right: 0.5rem;
        }

        .sidebar nav {
            margin-top: 2rem;
        }

        .sidebar nav button {
            display: flex;
            align-items: center;
            background: none;
            border: none;
            color: inherit;
            text-align: left;
            padding: 1rem;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .sidebar nav button:hover {
            background: #4a5568;
            color: #e2e8f0;
        }

        .sidebar nav button i {
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .content {
            margin-left: 250px;
            padding: 2rem;
            transition: margin-left 0.3s ease;
        }

        .content.collapsed {
            margin-left: 60px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .card {
            background-color: #2d3748;
            color: #cbd5e0;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .light .card {
            background-color: #ffffff;
            color: #2d3748;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .btn-primary {
            background-color: #4a5568;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2d3748;
        }

        /* Tabel Dark Mode */
        .dark .table {
            background-color: #1a202c;
            color: #e2e8f0;
            border-color: #4a5568;
        }

        .dark .table-striped tbody tr:nth-of-type(odd) {
            background-color: #2d3748;
        }

        .dark .table-hover tbody tr:hover {
            background-color: #4a5568;
        }

        /* Tabel Light Mode */
        .light .table {
            background-color: #ffffff;
            color: #2d3748;
            border-color: #e2e8f0;
        }

        .light .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f7fafc;
        }

        .light .table-hover tbody tr:hover {
            background-color: #e2e8f0;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .custom-table {
            border-radius: 5px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.1) !important; /* Transparan */

            width: 945px;
        }

    </style>
</head>
<body class="dark">
    <div class="sidebar" id="sidebar">
        <div>
            <h1 id="sidebarTitle" style="margin: 30px; font-family:Poppins;">
                <i class="bi bi-fingerprint"></i> Perpus
            </h1>
            <hr>
        </div>
        <nav>
            <a href="{{ route('buku.index') }}">
                <button>
                    <i class="bi bi-book"></i>
                    Buku
                </button>
            </a>
            <a href="{{ route('penerbit.index') }}">
                <button>
                    <i class="bi bi-cloud-upload"></i>
                    Penerbit
                </button>
            </a>            
            <a href="{{ route('genre.index') }}">
                <button>
                    <i class="bi bi-hourglass-split"></i>
                    Genre
                </button>
            </a>
            <hr>
            <a href="{{ route('pembeli.index') }}">
              <button>
                  <i class="bi bi-person-check"></i>
                  Pembeli
              </button>
            </a>
            <a href="{{ route('transaksi.index') }}">
              <button>
                  <i class="bi bi-cash-coin"></i>
                  Transaksi
              </button>
            </a>
        </nav>
    </div>
    <div class="content" id="content">
        <header>
            <h2>Data Buku</h2>
            <div>
                <button class="btn btn-primary" onclick="toggleDarkMode()" id="themeToggle">
                    <div style="display: flex; gap: 8px;">
                        <i class="bi bi-moon-fill"></i> Dark
                    </div>
                </button>
            </div>
        </header>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="display: flex; justify-content:space-between;">
                            <h3>Buku Panel</h3>
                            <a href="{{ route('buku.create') }}">
                                <button class="btn btn-outline-primary" style="width: 60px; height: 40px;">
                                    ADD
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <table class="custom-table">
                                <thead class="text-center" >
                                    <tr style="height: 40px;">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Buku</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Tanggal Terbit</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider text-center">
                                    @php $no = 1 @endphp
                                    @foreach ($buku as $data)
                                        <tr style="height: 50px; overflow:hidden;">
                                            <th scope="row">{{$no++}}</th>
                                            <td>{{$data->nama_buku}}</td>
                                            <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                                            <td>{{$data->stok}}</td>
                                            <td>
                                                <img style="width: 35px" src="{{ asset('/image/buku/' . $data->image) }}" alt="">
                                            </td>
                                            <td>{{$data->penerbit->nama_penerbit}}</td>
                                            <td>{{$data->tanggal_terbit}}</td>
                                            <td>{{$data->genre->genre}}</td>

                                            <td style="display: flex; justify-content: center; align-items: center; gap: 5px; margin: 10px;">
                                                <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="{{ route('buku.show', $data->id) }}" class="btn btn-warning"><i class="bi bi-eye-fill"></i></a>
                                                <form action="{{ route('buku.destroy', $data->id) }}" method="POST" style="margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data milik {{$data->nama}} ?')"><i class="bi bi-trash3"></i></button>
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
        
        
        
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');
        const themeToggle = document.getElementById('themeToggle');

        function toggleDarkMode() {
            const isDark = document.body.classList.contains('dark');
            if (isDark) {
                document.body.classList.remove('dark');
                document.body.classList.add('light');
                themeToggle.innerHTML = `
                <div style="display: flex; gap: 8px;">
                    <i class="bi bi-brightness-high-fill"></i> Light
                </div>
                `;
            } else {
                document.body.classList.remove('light');
                document.body.classList.add('dark');
                themeToggle.innerHTML = `
                <div style="display: flex; gap: 8px;">
                    <i class="bi bi-moon-fill"></i> Dark
                </div>
                `;
            }
        }

        document.getElementById('sidebarTitle').addEventListener('click', toggleSidebar);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>    
</body>
</html>