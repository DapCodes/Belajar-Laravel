<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_product', 'quantity', 'order_date', 'id_customer'];
    public $timestamp = true;

    public function produks ()
    {
        return $this->belongsTo(Produk::class, 'id_product');
    }
    public function customers ()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
