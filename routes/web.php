<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;


Route::get('/', function () {
    return view('utama');
});

Route::get('/', [UserController::class, 'index'])->name('halaman-utama');
Route::get('/tentang-kami', [UserController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/cari-mentor', [UserController::class, 'indexMentor'])->name('cari-mentor');

Route::get('/pilih-mentor', [UserController::class, 'index']);
Route::get('/pilih-mentor/{id}/jadwal', [UserController::class, 'jadwal'])->name('jadwal.edit');
Route::post('/pilih-mentor/{id}', [UserController::class, 'pilih_jadwal'])->name('jadwals.update');

// Ini buat admin doang
Route::get('/tambah-jadwal', function () {
    return view('tambah-jadwal');
})->name('tambah-jadwal');

Route::post('/tambah-jadwal', [ScheduleController::class, 'tambah_jadwal']);

Route::get('/pilih-mentor/{id}/zoom', [UserController::class, 'link_zoom'])->name('zoom.edit');

Route::get('/cari-materi', [CourseController::class, 'index'])->name('cari-materi');

Route::post('/detail-materi', [CourseController::class, 'detail_materi'])->name('detail.materi');

Route::post('/cari-materi', [CourseController::class, 'search'])->name('search');


Route::get('/daftar', [DaftarController::class, 'showForm'])->name('daftar');
Route::post('/daftar', [DaftarController::class, 'store']);
