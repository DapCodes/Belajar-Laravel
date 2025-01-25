<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nis', 'nama', 'jenis_kelamin', 'kelas', 'cover'];
    public $timestamp = true;

    // menghapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/siswa' . $this->cover))) {
            return unlink(public_path('image/siswa' . $this->cover));
        }
    }
}
