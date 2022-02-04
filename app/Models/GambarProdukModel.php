<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarProdukModel extends Model
{
    use HasFactory;
    protected $table = 'gambars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar', 'deskripsi', 'produk_id'
    ];

    public $timestamps = false;
}
