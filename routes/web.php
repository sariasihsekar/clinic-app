<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Bagian Register
Route::get('register',[RegisterController::class, 'index'])->name('register');
Route::post('register1',[RegisterController::class,'store'])->name('register.store');

//Bagian Login
Route::get('loginpasien',[LoginController::class, 'pasien'])->name('login.pasien');
Route::get('logindokter',[LoginController::class, 'dokter'])->name('login.dokter');
Route::get('loginadmin',[LoginController::class, 'admin'])->name('login.admin');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/login/pasien', [LoginController::class, 'authenticatepasien'])->name('login1');
Route::post('/login/dokter', [LoginController::class, 'authenticatedokter'])->name('login2');

//Bagian Admin kelola Dokter
Route::get('/admindashboard',[AdminController::class, 'index'])->name('admin.home');
Route::get('/datadokter',[AdminController::class, 'dokter'])->name('daftardokter');
Route::get('/dokter/tambah',[AdminController::class, 'tambahdokter'])->name('tambahdokter');
Route::post('dokter/tambahdata',[AdminController::class, 'dokterstore'])->name('doktertambah');
Route::get('dokter/edit/{id}',[AdminController::class, 'editdokter'])->name('editdokter');
Route::post('dokter/update/{id}',[AdminController::class, 'dokterupdate'])->name('dokter.update');
Route::delete('/dokter/{id}', [AdminController::class, 'destroydokter'])->name('dokter.destroy');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//Admin Bagian kelola Pasien
Route::get('/datapasien',[AdminController::class, 'pasien'])->name('daftarpasien');
Route::get('/pasien/tambah', [AdminController::class, 'tambahpasien'])->name('tambahpasien');
Route::post('pasien/tambahdata',[AdminController::class, 'pasienstore'])->name('pasientambah');
Route::get('pasien/edit/{id}',[AdminController::class, 'editpasien'])->name('editpasien');
Route::post('pasien/update/{id}',[AdminController::class, 'pasienupdate'])->name('pasien.update');
Route::delete('/pasien/{id}', [AdminController::class, 'destroypasien'])->name('pasien.destroy');

//admin bagian kelola poli
Route::get('/datapoli',[AdminController::class, 'poli'])->name('daftarpoli');
Route::get('/poli/tambah', [AdminController::class, 'tambahpoli'])->name('tambahpoli');
Route::post('poli/tambahdata',[AdminController::class, 'polistore'])->name('politambah');
Route::get('poli/edit/{id}', [AdminController::class, 'editpoli'])->name('editpoli');
Route::post('poli/update/{id}',[AdminController::class, 'poliupdate'])->name('poli.update');
Route::delete('/poli/{id}', [AdminController::class, 'destroypoli'])->name('poli.destroy');

//admin bagian kelola obat
Route::get('/dataobat',[AdminController::class, 'obat'])->name('daftarobat');
Route::get('/obat/tambah', [AdminController::class, 'tambahobat'])->name('tambahobat');
Route::post('obat/tambahdata',[AdminController::class, 'obatstore'])->name('obattambah');
Route::get('obat/edit/{id}', [AdminController::class, 'editobat'])->name('editobat');
Route::post('obat/update/{id}',[AdminController::class, 'obatupdate'])->name('obat.update');
Route::delete('/obat/{id}', [AdminController::class, 'destroyobat'])->name('obat.destroy');

//pengaturan pasiencontroller
Route::get('/pasiendashboard', [PasienController::class, 'index'])->name('pasienhome');
Route::post('pasien/logout', [PasienController::class, 'logout'])->name('pasien.logout');

//pengaturan di dokter controller
Route::get('/dokterdashboard', [DokterController::class, 'index'])->name('dokterhome');
Route::post('dokter/logout', [DokterController::class, 'logout'])->name('dokter.logout');