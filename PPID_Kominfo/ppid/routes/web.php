<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::resource('pedoman',App\Http\Controllers\PedomanController::class);
Route::resource('dashum',App\Http\Controllers\DashumController::class);
Route::resource('sop',App\Http\Controllers\SopController::class);
Route::resource('berkala',App\Http\Controllers\BerkalaController::class);
Route::resource('sesaat',App\Http\Controllers\SesaatController::class);
Route::resource('semerta',App\Http\Controllers\SemertaController::class);
Route::resource('kecuali',App\Http\Controllers\KecualiController::class);
Route::resource('langsung',App\Http\Controllers\LangsungController::class);
Route::resource('informasi',App\Http\Controllers\InformasiController::class);
Route::resource('permohonan',App\Http\Controllers\PermohonanController::class);
Route::resource('permohonan_online',App\Http\Controllers\PermohonanOnlineController::class);
Route::resource('keberatan',App\Http\Controllers\KeberatanController::class);
Route::resource('laporan',App\Http\Controllers\LaporanController::class);
Route::resource('login',App\Http\Controllers\LoginController::class);
Route::resource('login_pengguna',App\Http\Controllers\LoginPenggunaController::class);
Route::resource("register-pengguna", App\Http\Controllers\RegisterPenggunaController::class);
Route::resource('admin',App\Http\Controllers\AdminController::class)->middleware('auth');
Route::resource('pengguna',App\Http\Controllers\PenggunaController::class)->middleware('auth');

// backend
Route::resource('banner-admin', App\Http\Controllers\BannerController::class);
Route::resource('library-admin', App\Http\Controllers\LibraryController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

