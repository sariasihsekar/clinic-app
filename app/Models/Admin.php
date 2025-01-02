<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    // Nama tabel di database (jika berbeda dari nama model dalam bentuk jamak)
    protected $table = 'admin';

    // Kolom yang dapat diisi melalui Mass Assignment
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];

    public $timestamps = true;

   
}
