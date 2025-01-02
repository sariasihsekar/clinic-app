<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;
use App\Models\Admin;
use App\Models\Dokter;

class LoginController extends Controller
{
    public function pasien()
    {
        return view('loginpasien');

    }
    public function dokter()
    {
        return view('logindokter');

    }
    public function admin()
    {
        return view('loginadmin');

    }
    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'password' => 'required|string',
            'user_type' => 'required|string',
        ]);
    
        // Ambil inputan
        $nama = $request->input('nama');
        $password = $request->input('password');
        $userType = $request->input('user_type');
    
        if ($userType === 'admin') {
            // Cek admin di database
            $admin = DB::table('admin')->where('nama', $nama)->where('password', $password)->first();
    
            if ($admin) {
                // Simpan sesi dan arahkan ke dashboard admin
                session(['user' => $admin, 'role' => 'admin']);
                return redirect()->route('admin.home');
            } else {
                // Jika data tidak cocok
                return back()->with('error', 'Nama atau password salah!');
            }
        }
    
        // Jika tipe user tidak valid
        return back()->with('error', 'Tipe pengguna tidak valid!');
    }

    public function authenticatepasien(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'no_ktp' => 'required|numeric',
            'user_type' => 'required|string',
        ]);
    
        // Ambil inputan
        $nama = $request->input('nama');
        $no_ktp = $request->input('no_ktp');
        $userType = $request->input('user_type');
    
        if ($userType === 'pasien') {
            // Cek admin di database
            $pasien = DB::table('pasien')->where('nama', $nama)->where('no_ktp', $no_ktp)->first();
    
            if ($pasien) {
                // Simpan sesi dan arahkan ke dashboard admin
                session(['user' => $pasien, 'role' => 'pasien']);
                return redirect()->route('pasienhome');
            } else {
                // Jika data tidak cocok
                return back()->with('error', 'Nama atau no ktp salah!');
            }
        }
    
        // Jika tipe user tidak valid
        return back()->with('error', 'Tipe pengguna tidak valid!');
    }

    public function authenticatedokter(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'password' => 'required|string',
            'user_type' => 'required|string',
        ]);
    
        // Ambil inputan
        $nama = $request->input('nama');
        $password = $request->input('password');
        $userType = $request->input('user_type');
    
        if ($userType === 'dokter') {
            // Cek admin di database
            $dokter = DB::table('dokter')->where('nama', $nama)->where('password', $password)->first();
    
            if ($dokter) {
                // Simpan sesi dan arahkan ke dashboard admin
                session(['user' => $dokter, 'role' => 'dokter']);
                return redirect()->route('dokterhome');
            } else {
                // Jika data tidak cocok
                return back()->with('error', 'Nama atau password salah!');
            }
        }
    
        // Jika tipe user tidak valid
        return back()->with('error', 'Tipe pengguna tidak valid!');
    }
}
