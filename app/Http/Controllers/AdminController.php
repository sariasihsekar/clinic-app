<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Pasien;
use App\Models\Admin;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Poli;

class AdminController extends Controller
{
   public function logout()
    {
        // Menghapus data sesi admin
        Session::forget('id');
        Session::forget('nama');

        // Redirect ke halaman login admin
        return redirect('/')->with('status', 'Anda telah berhasil logout.');
    }

   public function index()
   {
    return view('adminhome');
   }

   public function dokter()
   {
      $dokter = Dokter::all();
      return view('daftardokter', compact('dokter'));
   }
   public function tambahdokter()
   {
      return view('tambahdokter');
   }

   public function dokterstore(Request $request)
   {
       // Validasi input
       $request->validate([
           'nama' => 'required|string|max:150',
           'alamat' => 'required|string|max:255',
           'no_hp' => 'required|numeric|max:9999999999999',
           'id_poli' => 'required|numeric|min:1',
           'password' => 'required|string|max:8',
       ]);

       // Menyimpan data dokter ke database
       Dokter::create([
           'nama' => $request->input('nama'),
           'alamat' => $request->input('alamat'),
           'no_hp' => $request->input('no_hp'),
           'id_poli' => $request->input('id_poli'),
           'password' => $request->input('password'),
       ]);

       // Redirect atau berikan response
       return redirect()->route('daftardokter')->with('success', 'Dokter berhasil ditambahkan!');
   }

   public function editdokter($id)
   {
      $dokter = Dokter::findOrFail($id);
      return view('editdokter', compact('dokter'));
   }

   public function dokterupdate(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:150',
        'alamat' => 'required|string|max:255',
        'no_hp' => 'required|numeric|max:9999999999999',  // Sesuaikan dengan validasi yang dibutuhkan
        'id_poli' => 'required|numeric|min:1',
        'password' => 'required|string|max:8',
    ]);

    // Cari dokter berdasarkan ID dan update data
    $dokter = Dokter::findOrFail($id);
    $dokter->update([
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'no_hp' => $request->input('no_hp'),
        'id_poli' => $request->input('id_poli'),
        'password' => $request->input('password'),
    ]);

    // Redirect atau berikan response
    return redirect()->route('daftardokter')->with('success', 'Dokter berhasil diperbarui!');
}

   public function destroydokter($id)
   {
      $dokter = Dokter::findOrFail($id);

      $dokter->delete();

      return redirect()->route('daftardokter')->with('success', 'Data Dokter berhasil dihapus');
   }

   //admin bagian kelola pasien

   public function pasien()
   {
      $pasien = Pasien::all();
      return view('daftarpasien', compact('pasien'));
   }

   public function tambahpasien()
   {
      return view('tambahpasien');
   }

   public function pasienstore(Request $request)
   {
       // Validasi input
       $request->validate([
           'nama' => 'required|string|max:150',
           'alamat' => 'required|string|max:255',
           'no_ktp' => 'required|numeric|max:9999999999999999',
           'no_hp' => 'required|numeric|max:9999999999999',
           'no_rm' => 'required|string|max:4',
       ]);

       // Menyimpan data dokter ke database
       Pasien::create([
           'nama' => $request->input('nama'),
           'alamat' => $request->input('alamat'),
           'no_ktp' => $request->input('no_ktp'),
           'no_hp' => $request->input('no_hp'),
           'no_rm' => $request->input('no_rm'),
       ]);

       // Redirect atau berikan response
       return redirect()->route('daftarpasien')->with('success', 'pasien berhasil ditambahkan!');
   }

   public function editpasien($id)
   {
      $pasien = Pasien::findOrFail($id);
      return view('editpasien', compact('pasien'));
   }

   public function pasienupdate(Request $request, $id)
   {
       // Validasi input
       $request->validate([
           'nama' => 'required|string|max:150',
           'alamat' => 'required|string|max:255',
           'no_hp' => 'required|numeric|max:999999999999',  // Sesuaikan dengan validasi yang dibutuhkan
           'no_ktp' => 'required|numeric|max:9999999999999999',
           'no_rm' => 'required|string|max:4',
       ]);
   
       // Cari dokter berdasarkan ID dan update data
       $pasien = Pasien::findOrFail($id);
       $pasien->update([
           'nama' => $request->input('nama'),
           'alamat' => $request->input('alamat'),
           'no_hp' => $request->input('no_hp'),
           'no_ktp' => $request->input('no_ktp'),
           'no_rm' => $request->input('no_rm'),
       ]);
   
       // Redirect atau berikan response
       return redirect()->route('daftarpasien')->with('success', 'Data Pasien berhasil diperbarui!');
   }

   public function destroypasien($id)
   {
      $pasien = Pasien::findOrFail($id);

      $pasien->delete();

      return redirect()->route('daftarpasien')->with('success', 'Data Pasien berhasil dihapus');
   }

   //admin bagian kelola poli

   public function poli()
   {
      $poli = Poli::all();
      return view('daftarpoli', compact('poli'));
   }

   public function tambahpoli()
   {
      return view('tambahpoli');
   }

   public function polistore(Request $request)
   {
       // Validasi input
       $request->validate([
           'nama_poli' => 'required|string|max:25',
           'keterangan' => 'required|string|max:500',
       ]);

       // Menyimpan data dokter ke database
       Poli::create([
           'nama_poli' => $request->input('nama_poli'),
           'keterangan' => $request->input('keterangan'),
       ]);

       // Redirect atau berikan response
       return redirect()->route('daftarpoli')->with('success', 'poli berhasil ditambahkan!');
   }

   public function editpoli($id)
   {
      $poli = Poli::findOrFail($id);
      return view('editpoli', compact('poli'));
   }

   public function poliupdate(Request $request, $id)
   {
       // Validasi input
       $request->validate([
           'nama_poli' => 'required|string|max:25',
           'keterangan' => 'required|string|max:500',
       ]);
   
       // Cari dokter berdasarkan ID dan update data
       $poli = Poli::findOrFail($id);
       $poli->update([
           'nama_poli' => $request->input('nama_poli'),
           'keterangan' => $request->input('keterangan'),
       ]);
   
       // Redirect atau berikan response
       return redirect()->route('daftarpoli')->with('success', 'Data Poli berhasil diperbarui!');
   }

   public function destroypoli($id)
   {
      $poli = Poli::findOrFail($id);

      $poli->delete();

      return redirect()->route('daftarpoli')->with('success', 'Data Poli berhasil dihapus');
   }

   //admin bagian control obat
   public function obat()
   {
      $obat = Obat::all();
      return view('daftarobat', compact('obat'));
   }

   public function tambahobat()
   {
      return view('tambahobat');
   }

   public function obatstore(Request $request)
   {
       // Validasi input
       $request->validate([
           'nama_obat' => 'required|string|max:25',
           'kemasan' => 'required|string|max:35',
           'harga' => 'required|integer|max:9999999999',
       ]);

       // Menyimpan data dokter ke database
       Obat::create([
           'nama_obat' => $request->input('nama_obat'),
           'kemasan' => $request->input('kemasan'),
           'harga' =>$request->input('harga'),
       ]);

       // Redirect atau berikan response
       return redirect()->route('daftarobat')->with('success', 'obat berhasil ditambahkan!');
   }  
   
   public function editobat($id)
   {
      $obat = Obat::findOrFail($id);
      return view('editobat', compact('obat'));
   }

   public function obatupdate(Request $request, $id)
   {
       // Validasi input
       $request->validate([
           'nama_obat' => 'required|string|max:25',
           'kemasan' => 'required|string|max:35',
           'harga' => 'required|integer|max:9999999999',
       ]);
   
       // Cari dokter berdasarkan ID dan update data
       $obat = Obat::findOrFail($id);
       $obat->update([
           'nama_obat' => $request->input('nama_obat'),
           'kemasan' => $request->input('kemasan'),
           'harga' => $request->input('harga'),
       ]);
   
       // Redirect atau berikan response
       return redirect()->route('daftarobat')->with('success', 'Data Obat berhasil diperbarui!');
   }

   public function destroyobat($id)
   {
      $obat = Obat::findOrFail($id);

      $obat->delete();

      return redirect()->route('daftarobat')->with('success', 'Data obat berhasil dihapus');
   }

}

