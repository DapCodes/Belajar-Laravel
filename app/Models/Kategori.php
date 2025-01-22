<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_kategori'];
    public $timestamp = true;

    public function product ()
    {
        return $this->hasMany(Product::class);
    }
}
