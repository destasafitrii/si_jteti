<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\PimpinanWebController;
use App\Http\Controllers\VisitiController;
use App\Http\Controllers\VisitlController;

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


Route::get('/laboratorium_ti', function () {
    return view('content/frontend/fasilitas/laboratorium_ti');
});
Route::get('/laboratorium_te', function () {
    return view('content/frontend/fasilitas/laboratorium_te');
});
Route::get('/ruang_kelas_ti', function () {
    return view('content/frontend/fasilitas/ruang_kelas_ti');
});
Route::get('/ruang_kelas_te', function () {
    return view('content/frontend/fasilitas/ruang_kelas_te');
});
Route::get('/ruang_manajemen_ti', function () {
    return view('content/frontend/fasilitas/ruang_manajemen_ti');
});
Route::get('/ruang_manajemen_te', function () {
    return view('content/frontend/fasilitas/ruang_manajemen_te');
});

Route::get('/akreditasi_ti', function () {
    return view('content/frontend/akreditasi/akreditasi_ti');
});
Route::get('/akreditasi_te', function () {
    return view('content/frontend/akreditasi/akreditasi_te');
});


Route::get('/berita', function () {
    return view('content/frontend/berita');
});
Route::get('/kontak', function () {
    return view('content/frontend/kontak');
});


Route::get('/detail_berita', function () {
    return view('content/frontend/berita/detail_berita');
});
Route::get('/detail_fasilitas', function () {
    return view('content/frontend/berita/detail_fasilitas');
});
Route::get('/admin', function () {
    return view('content/backend/dashboard');
});
Route::get('/admin/pimpinan', function () {
        return view('content/backend/pimpinan/index'); 
});

//////////////////////////////
// Routes for frontend
Route::get('/pimpinan', [PimpinanWebController::class, 'index'])->name('frontend.pimpinan.index');

// Routes for backend
Route::prefix('admin')->group(function () {
    Route::resource('pimpinan', PimpinanController::class);
    Route::resource('visi-misi-ti', VisitiController::class);
    Route::resource('visi-misi-tl', VisitlController::class);
});