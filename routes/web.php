<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KendaraanController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::get('register',[RegisterController::class,'index'])->name('register')->middleware('guest');

Route::get('bast_kendaraan', function(){
    return view('admin.layouts.bast_kendaraan');
})->name('bast_kendaraan')->middleware('auth');

Route::get('bast_barang', function(){
    return view('admin.layouts.bast_barang');
})->name('bast_barang')->middleware('auth');



Route::post('register',[RegisterController::class,'store']);
Route::post('login',[LoginController::class,'authenticate']);
Route::post('logout',[LoginController::class,'logout']);

Route::resource('dashboard', SuratController::class)->middleware('auth');
Route::resource('pegawai', UserController::class)->middleware('auth');
Route::resource('barang', BarangController::class)->middleware('auth');
Route::resource('kendaraan', KendaraanController::class)->middleware('auth');

Route::get('print_bast/{id}', [BarangController::class, 'bast'])->name('print_bast')->middleware('auth');
Route::get('print_bast_kendaraan/{id}', [KendaraanController::class, 'bast_kendaraan'])->name('print_bast_kendaraan')->middleware('auth');

Route::get('export_barang', [BarangController::class, 'export_barang'])->name('export_barang')->middleware('auth');
Route::get('export_kendaraan', [KendaraanController::class, 'export_kendaraan'])->name('export_kendaraan')->middleware('auth');
Route::get('export_pegawai', [UserController::class, 'export_pegawai'])->name('export_pegawai')->middleware('auth');

// Cari
Route::get('/cari', [BarangController::class, 'cari'])->name('cari')->middleware('auth');