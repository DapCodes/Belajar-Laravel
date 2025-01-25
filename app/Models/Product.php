<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_product', 'harga', 'stok', 'id_kategori', 'cover'];
    public $timestamp = true;

    // menghapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/product' . $this->cover))) {
            return unlink(public_path('image/product' . $this->cover));
        }
    }

    public function kategori ()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
