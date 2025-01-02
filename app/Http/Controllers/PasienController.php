<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        return view ('pasienhome');
    }

    public function logout()
    {
        // Menghapus data sesi admin
        Session::forget('id');
        Session::forget('nama');

        // Redirect ke halaman login admin
        return redirect('/')->with('status', 'Anda telah berhasil logout.');
    }
}
