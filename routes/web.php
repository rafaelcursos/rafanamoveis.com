<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', [App\Http\Controllers\ProdutoController::class, 'index']);
Route::get('/pagina1/{nome}', [App\Http\Controllers\ProdutoController::class, 'pagina1']);
Route::get('/pagina2/{nome}', [App\Http\Controllers\ProdutoController::class, 'pagina2']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registro', [App\Http\Controllers\HomeController::class, 'registro'])->name('registro');

// Rotas para inserção de novo produto. Aqui é necessário estar logado para utilizar
Route::get('/novoproduto/vitrine', [App\Http\Controllers\ProdutoController::class, 'vitrine'])->middleware('auth');
Route::post('/novoproduto/vitrine', [App\Http\Controllers\ProdutoController::class, 'insertvitrine'])->middleware('auth');

Route::get('/novoproduto', [App\Http\Controllers\ProdutoController::class, 'novoproduto'])->middleware('auth');
Route::post('/novoproduto', [App\Http\Controllers\ProdutoController::class, 'insert'])->middleware('auth');
Route::delete('/novoproduto/{id}', [App\Http\Controllers\ProdutoController::class, 'deletar'])->middleware('auth');

//Rotas para inserir nova cor ao sistema
Route::get('/novacor', [App\Http\Controllers\CorController::class, 'index'])->middleware('auth');
Route::post('/novacor', [App\Http\Controllers\CorController::class, 'insert'])->middleware('auth');

//Rotas para inserir novo tecido ao sistema
Route::get('/novotecido', [App\Http\Controllers\TecidoController::class, 'index'])->middleware('auth');
Route::post('/novotecido', [App\Http\Controllers\TecidoController::class, 'insert'])->middleware('auth');

//Rotas para inserir novo tamanho ao sistema
Route::get('/novotamanho', [App\Http\Controllers\TamanhoController::class, 'index'])->middleware('auth');
Route::post('/novotamanho', [App\Http\Controllers\TamanhoController::class, 'insert'])->middleware('auth');

//Rotas para inserir novo tipo de produto ao sistema
Route::get('/novotipo', [App\Http\Controllers\TipoController::class, 'index'])->middleware('auth');
Route::post('/novotipo', [App\Http\Controllers\TipoController::class, 'insert'])->middleware('auth');

//Rotas para inserir novo tipo de produto ao sistema
Route::get('/novalinha', [App\Http\Controllers\LinhaController::class, 'index'])->middleware('auth');
Route::post('/novalinha', [App\Http\Controllers\LinhaController::class, 'insert'])->middleware('auth');

