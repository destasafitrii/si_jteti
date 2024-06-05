<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/pimpinan', function () {
    return view('content/frontend/pimpinan');
});
Route::get('/visimisi_ti', function () {
    return view('content/frontend/visimisi_ti');
});
Route::get('/visimisi_te', function () {
    return view('content/frontend/visimisi_te');
});
Route::get('/dosen_ti', function () {
    return view('content/frontend/dosen_ti');
});
Route::get('/dosen_te', function () {
    return view('content/frontend/dosen_te');
});
Route::get('/teknisi_ti', function () {
    return view('content/frontend/teknisi_ti');
});
Route::get('/teknisi_te', function () {
    return view('content/frontend/teknisi_te');
});
Route::get('/laboratorium_ti', function () {
    return view('content/frontend/laboratorium_ti');
});
Route::get('/laboratorium_te', function () {
    return view('content/frontend/laboratorium_te');
});
Route::get('/ruang_kelas_ti', function () {
    return view('content/frontend/ruang_kelas_ti');
});
Route::get('/ruang_kelas_te', function () {
    return view('content/frontend/ruang_kelas_te');
});
Route::get('/akreditasi_ti', function () {
    return view('content/frontend/akreditasi_ti');
});
Route::get('/akreditasi_te', function () {
    return view('content/frontend/akreditasi_te');
});
Route::get('/ruang_manajemen_ti', function () {
    return view('content/frontend/ruang_manajemen_ti');
});
Route::get('/ruang_manajemen_te', function () {
    return view('content/frontend/ruang_manajemen_te');
});
Route::get('/berita', function () {
    return view('content/frontend/berita');
});
Route::get('/kontak', function () {
    return view('content/frontend/kontak');
});
Route::get('/detail_berita', function () {
    return view('content/frontend/detail_berita');
});
Route::get('/detail_fasilitas', function () {
    return view('content/frontend/detail_fasilitas');
});