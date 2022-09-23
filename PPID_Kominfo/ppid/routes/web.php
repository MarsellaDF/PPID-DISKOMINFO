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
Route::resource('alur',App\Http\Controllers\AlurController::class);
Route::resource('pengajuan',App\Http\Controllers\PengajuanController::class);