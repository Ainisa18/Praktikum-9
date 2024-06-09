<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route:: get('/', [DashboardController::class, 'show']);
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/pasien', [AdminController::class, 'pasien']);
Route::get('/admin/pegawai', [AdminController::class, 'pegawai']);
