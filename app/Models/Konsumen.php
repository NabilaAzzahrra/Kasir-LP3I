<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_konsumen',
        'status'
    ];

    protected $table = 'konsumen';

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'id_konsumen');
    }
}
