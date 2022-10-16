<?php

use App\Http\Controllers\ProductController;
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
Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/cadeiras', [App\Http\Controllers\ProductController::class, 'cadeiras']);

Auth::routes();

Route::get('/novoproduto', [App\Http\Controllers\ProdutoController::class, 'index'])->middleware('auth');
Route::post('/novoproduto', [App\Http\Controllers\ProdutoController::class, 'insert'])->middleware('auth');

Route::get('/novacor', [App\Http\Controllers\CorController::class, 'index'])->middleware('auth');
Route::post('/novacor', [App\Http\Controllers\CorController::class, 'insert'])->middleware('auth');

Route::get('/novotecido', [App\Http\Controllers\TecidoController::class, 'index'])->middleware('auth');
Route::post('/novotecido', [App\Http\Controllers\TecidoController::class, 'insert'])->middleware('auth');

Route::get('/novotamanho', [App\Http\Controllers\TamanhoController::class, 'index'])->middleware('auth');
Route::post('/novotamanho', [App\Http\Controllers\TamanhoController::class, 'insert'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
