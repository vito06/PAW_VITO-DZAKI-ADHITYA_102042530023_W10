<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('halaman', [
            'judul' => 'Halaman Admin & Manajemen Pengguna',
            'deskripsi' => 'Kelola data akun pengguna, hak akses sistem, dan konfigurasi akademik.'
        ]);
    });
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen', function () {
        return view('halaman', [
            'judul' => 'Halaman Dosen',
            'deskripsi' => 'Pusat informasi jadwal mengajar, perwalian, dan aktivitas akademik dosen.'
        ]);
    });
});

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/mahasiswa', function () {
        return view('halaman', [
            'judul' => 'Halaman Mahasiswa',
            'deskripsi' => 'Pusat informasi perkuliahan, jadwal kelas, dan status akademik mahasiswa.'
        ]);
    });
});

Route::middleware(['auth', 'role:admin,dosen'])->group(function () {
    Route::get('/kelola-materi', function () {
        return view('halaman', [
            'judul' => 'Kelola Materi',
            'deskripsi' => 'Unggah, perbarui, dan atur modul pembelajaran mata kuliah.'
        ]);
    });

    Route::get('/kelola-nilai', function () {
        return view('halaman', [
            'judul' => 'Kelola Nilai',
            'deskripsi' => 'Input dan rekapitulasi nilai tugas, praktikum, serta ujian mahasiswa.'
        ]);
    });
});

Route::middleware(['auth', 'role:admin,dosen,mahasiswa'])->group(function () {
    Route::get('/lihat-materi', function () {
        return view('halaman', [
            'judul' => 'Materi Perkuliahan',
            'deskripsi' => 'Daftar modul dan bahan bacaan mata kuliah semester berjalan.'
        ]);
    });
});

Route::middleware(['auth', 'role:admin,mahasiswa'])->group(function () {
    Route::get('/lihat-nilai', function () {
        return view('halaman', [
            'judul' => 'Kartu Hasil Studi',
            'deskripsi' => 'Rincian nilai mata kuliah dan evaluasi hasil belajar pribadi.'
        ]);
    });
});