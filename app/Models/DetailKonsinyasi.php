<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKonsinyasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_konsinyasi',
        'kode_konsinyasi_detail',
        'produk',
        'harga',
        'harga_jual',
        'qty',
        'tgl_masuk',
        'status',
    ];

    protected $table = 'detail_konsinyasi';

    public static function createCode()
    {
        $latestCode = self::orderBy('kode_konsinyasi_detail', 'desc')->value('kode_konsinyasi_detail');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'KD' . $formattedCodeNumber;
    }

    public function produkJual()
    {
        return $this->hasMany(ProdukJual::class, 'kode_produk');
    }
}
