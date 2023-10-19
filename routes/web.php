<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Models\Barang;

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

Route::get('/', function () { return view('login');});
Route::get('login', [LoginController::class, 'index']);
Route::post('postlog', [LoginController::class, 'postLogin'])->name('poslog');
Route::get('admindash', function(){    return view ('admin.index');});
Route::get('suppliyerdash', function(){    return view ('suppliyer.index');});
Route::resource('gudang', GudangController::class);
Route::resource('barang', BarangController::class);
Route::post('barang/tambah-stok/{barang}', [BarangController::class, 'tambahStok'])->name('barang.tambah-stok');
Route::post('barang/kurangi-stok/{barang}', [BarangController::class, 'kurangiStok'])->name('barang.kurangi-stok');
Route::post('barang/tambah-stok/{barang}', [BarangController::class, 'tambahStok'])->name('barang.tambah-stok');
Route::get('admin', function () {
    //  untuk kembali ke halaman awal admin
    return view('admin.index');
})->name('admin.index');
Route::get('/index1', [BarangController::class, 'index1'])->name('barang.index1');
Route::get('logout', [LogoutController::class, 'logout']);
Route::get('/halaman-aman', 'SecureController@index')->middleware('prevent-back');




