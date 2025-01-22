<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name_customer', 'gender', 'contact'];
    public $timestamp = true;

    public function orders ()
    {
        return $this->hasMany(Order::class);
    }
}
