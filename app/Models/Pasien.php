<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    // Nama tabel di database (jika berbeda dari nama model dalam bentuk jamak)
    protected $table = 'pasien';

    // Kolom yang dapat diisi melalui Mass Assignment
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'no_ktp',
        'no_rm',
    ];
    // (Opsional) Jika tidak menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = true;

    protected static function booted()
    {
        static::created(function ($pasien) {
            $pasien->no_rm = str_pad($pasien->id, 4, '0', STR_PAD_LEFT);
            $pasien->save();
        });
    }
}
