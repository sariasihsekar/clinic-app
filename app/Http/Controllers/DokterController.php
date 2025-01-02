<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokterhome');
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
