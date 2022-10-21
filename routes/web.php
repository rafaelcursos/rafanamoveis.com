<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', [App\Http\Controllers\ProdutoController::class, 'index']);
Route::get('/pagina1/{id}', [App\Http\Controllers\ProdutoController::class, 'pagina1']);
Route::get('/pagina2/{id}', [App\Http\Controllers\ProdutoController::class, 'pagina2']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas para inserção de novo produto. Aqui é necessário estar logado para utilizar
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

//#################################################################################################################
//Rotas de associação
//
//Rotas para associar o prouto a cores variadas
Route::get('/associar/cor', [App\Http\Controllers\ProdutoController::class, 'associarcor'])->middleware('auth');
Route::post('/associar/cor', [App\Http\Controllers\ProdutoController::class, 'associarcorinsert'])->middleware('auth');

//Rotas para associar o prouto a tecidos variados
Route::get('/associar/tecido', [App\Http\Controllers\ProdutoController::class, 'associartecido'])->middleware('auth');
Route::post('/associar/tecido', [App\Http\Controllers\ProdutoController::class, 'iassociartecidoinsert'])->middleware('auth');

//Rotas para associar o prouto a tamanhos variados
Route::get('/associar/tamanho', [App\Http\Controllers\ProdutoController::class, 'associartamanho'])->middleware('auth');
Route::post('/associar/tamanho', [App\Http\Controllers\ProdutoController::class, 'iassociartamanhoinsert'])->middleware('auth');
