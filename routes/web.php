<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/visi-misi', [HomeController::class, 'visi_misi']);
Route::get('/staff-pengajar', [HomeController::class, 'staff_pengajar']);
Route::get('/ppdb', [HomeController::class, 'ppdb']);


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/autentikasi', [AuthController::class, 'authenticate'])->middleware('guest');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('panel')->group(function () {
        Route::get('/dashboard', [PanelController::class, 'dashboard'])->name('dashboard');
        Route::middleware('admin')->group(function () {
            Route::prefix('admin')->group(function () {
                Route::get('/guru-staff', [AdminController::class, 'guru_staff']);
                Route::get('/siswa', [AdminController::class, 'siswa']);
                Route::get('/kelas', [AdminController::class, 'kelas']);
                Route::get('/mapel', [AdminController::class, 'mapel']);
            });
        });
    });
});

