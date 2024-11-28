<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pembelian',
        'kode_produk',
        'qty',
        'total'
    ];

    protected $table = 'detail_pembelian';
}
