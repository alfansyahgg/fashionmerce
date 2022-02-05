<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiModel extends Model
{
    use HasFactory;

    protected $table = "informasis";
    protected $fillable = [
        'email', 'no_hp', 'tentang', 'alamat'
    ];
    
}
