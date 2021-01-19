<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\ClientProdukController;
use App\http\Controllers\UserController;
use App\http\Controllers\MahasiswaController;

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
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('client', [HomeController::class, 'client']);

Route::get('test/{produk}', [HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){

Route::post('produk/filter', [ProdukController::class, 'filter']);
Route::get('beranda', [HomeController::class, 'showberanda']);
Route::resource('produk', ProdukController::class);
Route::resource('user', UserController::class);
Route::resource('mahasiswa', MahasiswaController::class);

});

// cliet
Route::get('index', [ClientProdukController::class, 'index']);

// Route::get('produk', [ProdukController::class, 'index']);
// Route::get('produk/create', [ProdukController::class, 'create']);
// Route::get('produk', [ProdukController::class, 'store']);
// Route::get('produk{produk}', [ProdukController::class, 'show']);
// Route::get('produk{produk}/edit', [ProdukController::class, 'edit']);
// Route::put('produk{produk}', [ProdukController::class, 'update']);
// Route::delete('produk{produk}', [ProdukController::class, 'destroy']);
