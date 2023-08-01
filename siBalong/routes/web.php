<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BukuTamuController;

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

// Route::get('/laravel', function () {
//     return view('welcome');
// });
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/post', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
// Kelola Postingan
    Route::get('/post', function () {
        return (new PostController)->daftarPostingan('post');
    })->name('post');
    Route::post('/tambah-postingan', [PostController::class, 'tambahPostingan'])->name('tambah-postingan');
    Route::post('/postingan/{id}/hapus', [PostController::class, 'hapusPostingan'])->name('postingan.hapus');
    Route::post('/postingan/{id}', [PostController::class, 'updatePostingan'])->name('postingan.update');
    Route::post('/postingan/update-status/{id}', [PostController::class, 'updateStatusPostingan'])->name('postingan.updateStatus');
    Route::get('/galeriPost', function () {
        return (new PostController)->daftarPostingan('galeriPost');
    })->name('galeriPost');

    // Kelola Kategori Postingan
    Route::get('/kategoriPost', [KategoriController::class, 'daftarKategoriPost'])->name('daftar-kategori');
    Route::post('/kategoriPost/tambah', [KategoriController::class, 'tambahKategori'])->name('tambah-kategori');
    Route::post('/kategoriPost/edit/{id}', [KategoriController::class, 'editKategori'])->name('edit-kategori');
    Route::post('/kategoriPost/hapus/{id}', [KategoriController::class, 'hapusKategori'])->name('hapus-kategori');


    // Kelola Program Kegiatan
    Route::get('/proker', [ProkerController::class, 'daftarProker'])->name('proker');
    Route::post('/tambah-program', [ProkerController::class, 'tambahProgram'])->name('tambah-program');
    Route::post('/program/{id}/hapus', [ProkerController::class, 'hapusProgram'])->name('program.hapus');
    Route::post('/proker/edit/{id}', [ProkerController::class, 'editProgram'])->name('proker-edit');

    // Kelola Layanan Publik
    Route::get('/layanan-publik', [layananController::class, 'daftarLayanan'])->name('layanan-publik');
    Route::post('/tambah-layanan', [layananController::class, 'tambahLayanan'])->name('tambah-layanan');
    Route::post('/layanan-publik/{id}', [layananController::class, 'editLayanan'])->name('edit-layanan');
    Route::post('/layanan/{id}/hapus', [layananController::class, 'hapusLayanan'])->name('layanan-hapus');
    
    // Dashboard
    Route::get('/', [dashboardController::class, 'index'])->name('home');
    
    // Kelola Akun
    Route::get('/akun', [AkunController::class, 'daftarAkun'])->name('akun');
    Route::post('/tambah-akun', [AkunController::class, 'tambahAkun'])->name('tambah-akun');
    Route::post('/akun/{id}', [AkunController::class, 'editAkun'])->name('akun-edit');
    Route::post('/akun/{id}/hapus', [AkunController::class, 'hapusAkun'])->name('akun-hapus');
    
    //  Kelola Buku Tamu
    Route::get('/buku-tamu', [BukuTamuController::class, 'daftarBukuTamu'])->name('buku-tamu');
    Route::post('/tambah-buku', [BukuTamuController::class, 'tambahTamu'])->name('tambah-tamu');
    Route::get('/pegawai', [PegawaiController::class, 'tampilPegawai'])->name('pegawai');
    Route::post('/tambah-pegawai', [PegawaiController::class, 'tambahPegawai'])->name('tambah-pegawai');
    Route::post('/pegawai/{id}/hapus', [PegawaiController::class, 'hapusPegawai'])->name('pegawai-hapus');
});