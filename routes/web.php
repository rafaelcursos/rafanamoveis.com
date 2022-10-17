<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', [App\Http\Controllers\ProdutoController::class, 'pagina1']);
Route::get('/pagina2', [App\Http\Controllers\ProdutoController::class, 'pagina2']);

Auth::routes();

Route::get('/novoproduto', [App\Http\Controllers\ProdutoController::class, 'index'])->middleware('auth');
Route::post('/novoproduto', [App\Http\Controllers\ProdutoController::class, 'insert'])->middleware('auth');
Route::delete('/novoproduto/{id}', [App\Http\Controllers\ProdutoController::class, 'update'])->middleware('auth');

Route::get('/novacor', [App\Http\Controllers\CorController::class, 'index'])->middleware('auth');
Route::post('/novacor', [App\Http\Controllers\CorController::class, 'insert'])->middleware('auth');

Route::get('/novotecido', [App\Http\Controllers\TecidoController::class, 'index'])->middleware('auth');
Route::post('/novotecido', [App\Http\Controllers\TecidoController::class, 'insert'])->middleware('auth');

Route::get('/novotamanho', [App\Http\Controllers\TamanhoController::class, 'index'])->middleware('auth');
Route::post('/novotamanho', [App\Http\Controllers\TamanhoController::class, 'insert'])->middleware('auth');

Route::get('/novotipo', [App\Http\Controllers\TipoController::class, 'index'])->middleware('auth');
Route::post('/novotipo', [App\Http\Controllers\TipoController::class, 'insert'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
