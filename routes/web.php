<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/visi-misi', [HomeController::class, 'visi_misi']);
Route::get('/staff-pengajar', [HomeController::class, 'staff_pengajar']);
Route::get('/ppdb', [HomeController::class, 'ppdb']);
