<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';

     // Kolom yang dapat diisi melalui Mass Assignment
     protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga',
    ];
}
