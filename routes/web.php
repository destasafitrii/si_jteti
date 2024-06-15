<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\PimpinanWebController;
use App\Http\Controllers\VisitiController;
use App\Http\Controllers\VisitlController;
use App\Http\Controllers\DosentiController;
use App\Http\Controllers\DosentlController;
use App\Http\Controllers\TeknisitiController;
use App\Http\Controllers\TeknisitlController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\RuangkelasController;
use App\Http\Controllers\RuangmanajemenController;
use App\Http\Controllers\AkreditasitiController;
use App\Http\Controllers\AkreditasitlController;
use App\Http\Controllers\BeritajurusanController;
use App\Http\Controllers\BeritapenelitianController;
use App\Http\Controllers\BeritapengabdianController;
use App\Http\Controllers\BeritapblController;
use App\Http\Controllers\KegiatanmahasiswaController;
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

Route::get('/beranda', function () {
    return view('content/frontend/beranda');
});
Route::get('/visimisi_ti', function () {
    return view('content/frontend/profil/visimisi_ti');
});
Route::get('/visimisi_te', function () {
    return view('content/frontend/profil/visimisi_te');
});
Route::get('/dosen_ti', function () {
    return view('content/frontend/profil/dosen_ti');
});
Route::get('/dosen_te', function () {
    return view('content/frontend/profil/dosen_te');
});
Route::get('/teknisi_ti', function () {
    return view('content/frontend/profil/teknisi_ti');
});
Route::get('/teknisi_te', function () {
    return view('content/frontend/profil/teknisi_te');
});


Route::get('/laboratorium', function () {
    return view('content/frontend/fasilitas/laboratorium');
});
Route::get('/ruang_kelas', function () {
    return view('content/frontend/fasilitas/ruang_kelas');
});
Route::get('/ruang_manajemen', function () {
    return view('content/frontend/fasilitas/ruang_manajemen');
});

Route::get('/akreditasi_ti', function () {
    return view('content/frontend/akreditasi/akreditasi_ti');
});
Route::get('/akreditasi_te', function () {
    return view('content/frontend/akreditasi/akreditasi_te');
});
Route::get('/kurikulum_ti', function () {
    return view('content/frontend/akreditasi/kurikulum_ti');
});


Route::get('/berita', function () {
    return view('content/frontend/berita/berita');
});
Route::get('/penelitian', function () {
    return view('content/frontend/berita/penelitian');
});
Route::get('/pengabdian', function () {
    return view('content/frontend/berita/pengabdian');
});
Route::get('/pbl', function () {
    return view('content/frontend/berita/pbl');
});
Route::get('/kontak', function () {
    return view('content/frontend/kontak');
});


Route::get('/detail_berita', function () {
    return view('content/frontend/berita/detail_berita');
});
Route::get('/detail_fasilitas', function () {
    return view('content/frontend/fasilitas/detail_fasilitas');
});

Route::get('/admin/pimpinan', function () {
        return view('content/backend/pimpinan/index'); 
});

//////////////////////////////
// Routes for frontend
Route::get('/pimpinan', [PimpinanWebController::class, 'index'])->name('frontend.pimpinan.index');

// Routes for backend
Route::prefix('/admin')->group(function () {
    Route::get('dashboard', function () {return view('content/backend/dashboard');});
    Route::resource('pimpinan', PimpinanController::class);
    Route::resource('visi-misi-ti', VisitiController::class);
    Route::resource('visi-misi-tl', VisitlController::class);
    Route::resource('dosen-teknologi-informasi', DosentiController::class);
    Route::resource('dosen-teknologi-listrik', DosentlController::class);
    Route::resource('teknisi-teknologi-informasi', TeknisitiController::class);
    Route::resource('teknisi-teknologi-listrik', TeknisitlController::class);
    Route::resource('laboratorium', LaboratoriumController::class);
    Route::resource('ruangkelas', RuangkelasController::class);
    Route::resource('ruangmanajemen', RuangmanajemenController::class);
    Route::resource('akreditasi-teknologi-informasi', AkreditasitiController::class);
    Route::resource('akreditasi-teknologi-listrik', AkreditasitlController::class);
    Route::resource('berita-jurusan', BeritajurusanController::class);
    Route::resource('berita-penelitian', BeritapenelitianController::class);
    Route::resource('berita-pengabdian', BeritapengabdianController::class);
    Route::resource('berita-pbl', BeritapblController::class);
    Route::resource('kegiatan-mahasiswa', KegiatanmahasiswaController::class);
});