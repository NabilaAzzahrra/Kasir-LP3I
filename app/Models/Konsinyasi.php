<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsinyasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_konsinyasi',
        'nama_konsinyasi',
    ];

    protected $table = 'konsinyasi';

    public static function createCode()
    {
        $latestCode = self::orderBy('kode_konsinyasi', 'desc')->value('kode_konsinyasi');
        $latestCodeNumber = intval(substr($latestCode, 2));
        $nextCodeNumber = $latestCodeNumber ? $latestCodeNumber + 1 : 1;
        $formattedCodeNumber = sprintf("%05d", $nextCodeNumber);
        return 'K' . $formattedCodeNumber;
    }
}
