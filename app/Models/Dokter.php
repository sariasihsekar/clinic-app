<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    // Nama tabel di database (jika berbeda dari nama model dalam bentuk jamak)
    protected $table = 'dokter';

     // Kolom yang dapat diisi melalui Mass Assignment
     protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'id_poli',
        'password',
    ];
}
