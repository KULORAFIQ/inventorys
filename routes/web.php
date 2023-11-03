<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogmasukController;
use App\Http\Controllers\LogkeluarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PDFController;
use App\Models\Barang;
use App\Models\Gudang;

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

Route::get('/', function () { return view('halamanawal');});
Route::get('login', [LoginController::class, 'index']);
Route::post('postlog', [LoginController::class, 'postLogin'])->name('poslog');
Route::get('admindash', function(){    return view ('admin.index');});
Route::get('petugasdash', function(){return view ('petugas.index');});
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
Route::get('/index2', [BarangController::class, 'index2'])->name('barang.index2');
Route::get('/indexg1', [GudangController::class, 'indexg1'])->name('gudang.indexg1');
Route::get('/indexg2', [GudangController::class, 'indexg2'])->name('gudang.indexg2');
Route::get('logout', [LogoutController::class, 'logout']);
Route::get('/halaman-aman', 'SecureController@index')->middleware('prevent-back');
Route::get('/generate-pdf', 'PDFController@generatePDF')->name('generate.pdf');
Route::get('logmasuk',[LogmasukController::class, 'index'])->name('log_barang.indexmasuk');
Route::get('logkeluar',[LogkeluarController::class, 'index'])->name('log_barang.indexkeluar');
Route::group(['middleware' => 'auth.check'], function () {
    // Rute yang memerlukan otentikasi di sini
    // Contoh:
    Route::get('/logout', 'LogoutController@index');
    Route::group(['middleware' => ['web', 'require.login']], function () {
        // Rute yang memerlukan otentikasi
    });
});




