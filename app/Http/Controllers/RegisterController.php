<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:150',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'no_ktp' => 'required|string|max:20|unique:pasien,no_ktp',
        ]);

        // Simpan data pasien ke database
        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'no_ktp' => $request->no_ktp,
        ]);

        // Redirect ke halaman registrasi dengan pesan sukses
        return redirect()->route('register')->with('success', 'Registrasi berhasil! Data Anda telah disimpan.');
    } 
}