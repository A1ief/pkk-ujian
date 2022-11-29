<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kategori', KategoriController::class);
Route::get('hapKat/{kategori}', [KategoriController::class, 'destroy']);

Route::resource('produk', ProdukController::class);
Route::get('hapPro/{produk}', [ProdukController::class, 'destroy']);

Route::resource('post', PostController::class);
Route::get('hapPos/{post}', [PostController::class, 'destroy']);
