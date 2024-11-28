<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produk',
        'produk',
        'harga',
        'harga_jual',
        'qty',
        'tgl_masuk',
        'status',
    ];

    protected $table = 'produk';

    public static function createCode()
    {
        $latestCode = self::orderBy('kode_produk', 'desc')->value('kode_produk');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'P' . $formattedCodeNumber;
    }

    public function produkJual()
    {
        return $this->hasMany(ProdukJual::class, 'kode_produk');
    }
}
