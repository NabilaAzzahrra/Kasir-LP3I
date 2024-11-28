<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pembelian',
        'tgl_pembelian',
        'id_supplier',
        'total_bayar'
    ];

    protected $table = 'pembelian';
}
