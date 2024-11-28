<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukJual extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produk',
        'produk',
        'harga_jual',
        'qty',
        'status'
    ];

    protected $table = 'produk_jual';

    public function detailKonsinyasi()
    {
        return $this->belongsTo(DetailKonsinyasi::class, 'kode_produk', 'kode_konsinyasi_detail');
    }
    public function produkStok()
    {
        return $this->belongsTo(Produk::class, 'kode_produk', 'kode_produk');
    }
}
