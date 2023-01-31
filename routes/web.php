<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFunction;

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
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/autentikasi', [AuthController::class, 'authenticate']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix(config('setting.url_panel'))->group(function () {
        Route::get('/dashboard', [PanelController::class, 'dashboard'])->name('dashboard');
        Route::middleware('admin')->group(function () {
            Route::prefix('/admin')->group(function () {
                Route::prefix('/guru-staff')->group(function () {
                    Route::get('/', [AdminController::class, 'guru_staff'])->name('guru-staff');
                    Route::get('/edit/{uid}', [AdminController::class, 'edit_gs'])->name('gs-edit');
                    Route::put('/edit/{uid}', [AdminFunction::class, 'edit_gs'])->name('gs-edit-progress');
                    Route::delete('/hapus/{uid}', [AdminFunction::class, 'hapus_gs'])->name('gs-hapus');
                    Route::post('/tambah', [AdminFunction::class, 'tambah_gs'])->name('gs-tambah');
                });
                Route::get('/siswa', [AdminController::class, 'siswa']);
                Route::get('/kelas', [AdminController::class, 'kelas']);
                Route::get('/mapel', [AdminController::class, 'mapel']);
            });
        });
    });
});

