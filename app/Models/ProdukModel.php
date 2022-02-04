<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'produk_id';
    protected $fillable = [
        'nama', 'kategori_id', 'harga', 'stok', 'deskripsi', 'slug',
    ];
}
