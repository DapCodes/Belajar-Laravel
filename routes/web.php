<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenerbitController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daffa', function () {
    return view('daffa');
});

Route::get('/home', function () {
    return "<h1>selamat datang di halaman HOME</h1>";
});

Route::get('/about', function () {
    return "<h1>selamat datang di halaman ABOUT</h1>";
});

Route::get('/contact', function () {
    return "<h1>selamat datang di halaman CONTACT</h1>";
});

Route::get('/siswa', function () {
    $data_siswa = ['Daffa', 'Daffa1', 'Daffa2', 'Daffa3'];
    return view('tampil', compact('data_siswa'));
});

Route::get('/tes/{nama}/{tanggal}/{jenis}/{agama}/{alamat}', function ($nama,$tanggal,$jenis,$agama,$alamat) {
    return "nama : ".$nama."<br>". 
            "tanggal lahir : ".$tanggal."<br>".
            "jenis kelamin : ".$jenis."<br>".
            "agama : ".$agama."<br>".
            "alamat : ".$alamat."<br>";
});

Route::get('/hitung/{b1}/{b2}', function ($b1,$b2) {
    $hasil = $b1 + $b2;
    return "bilangan 1 : ".$b1."<br>". 
            "bilangan 2 : ".$b2."<br>".
            "hasil : ".$hasil."<br>";
});

Route::get('/latihan/{a1}/{a2}/{a3}/{a4}/{a5}/{a6}', function ($nama, $tlp, $jn, $nb, $jml, $pbayar) {

    if ( $jn == "handphone") {
        if ($nb == "poco") {
        $harga = 3000000;
        }elseif ($nb == "samsum") {
        $harga = 5000000;
        }elseif ($nb == "iphone") {
        $harga = 15000000;
        }else {
        echo "error";
        };

    }elseif ( $jn == "laptop") {
        if ($nb == "lenovo") {
        $harga = 4000000;
        }elseif ($nb == "acer") {
        $harga = 8000000;
        }elseif ($nb == "macbook") {
        $harga = 20000000;
        }else {
        echo "error";
        };

    }elseif ( $jn == "tv") {
        if ($nb == "toshiba") {
        $harga = 5000000;
        }elseif ($nb == "samsum") {
        $harga = 8000000;
        }elseif ($nb == "lg") {
        $harga = 10000000;
        }else {
        echo "error";
        };
    };
$total = $harga * $jml;

if ($total >= 10000000) {
    $cb = 500000;
}else {
    $cb = 0;
};

if ($pbayar == "transfer") {
    $potongan = 50000;
}else {
    $potongan = 0;
};

$total_p = ($total - $cb) - $potongan;

    return 
    "nama pembeli :" .$nama. "<br>".
    "telepon :" .$tlp. "<br><br><hr>".
    "nama pembeli :" .$jn. "<br>". 
    "nama barang :" .$nb. "<br>". 
    "harga :" .$harga. "<br>".
    "jumlah :" .$jml. "<br><br><hr>".
    "total :" .$total. "<br>". 
    "casback :" .$cb. "<br>". 
    "pembayaran :" .$pbayar. "<br>".
    "potongan :" .$potongan. "<br><hr>". 
    "total pembayaran :" .$total_p. "<br>";
});


Route::get('/post', [PostController::class, 'menampilkan']);
Route::get('/barang', [PostController::class, 'menampilkan2']);

// routing dengan model

// -- untuk menamoulkan semua
// Route::get('/barang', function () {
//     $barang = Barang::all();
//     return view('tampil_barang', compact('barang'));
// });

// untuk menampilkan yang spesifik
// Route::get('/barang', function () {
//     $barang = Barang::where('id',1)->get();
//     return view('tampil_barang', compact('barang'));
// });

// menampilkan dengan out JSON
// Route::get('/barang/{id}', function ($id) {
//     $barang = Barang::find($id);
//     if ($barang) {
//         return $barang;
//     } else {
//         return "Data dengan ID $id tidak ditemukan.";
//     }
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD
Route::resource('siswa', SiswasController::class);
Route::resource('ppdb', PpdbController::class);


Route::resource('pengguna', PenggunaController::class);
Route::resource('telepon', TeleponController::class);


Route::resource('kategori', KategoriController::class);
Route::resource('product', ProductController::class);


Route::resource('produk', ProdukController::class);
Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);


Route::get('registrasi', [RegistrasiController::class, "index"])->name('registrasi');
Route::post('simpan-registrasi', [RegistrasiController::class, "simpanRegistrasi"])->name('simpan-registrasi');


Route::resource('buku', BukuController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('genre', GenreController::class);
Route::resource('penerbit', PenerbitController::class);