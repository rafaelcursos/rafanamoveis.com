<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [App\Http\Controllers\PageTampoController::class, 'index']);
Route::get('/page_base/{id}', [App\Http\Controllers\PageBaseController::class, 'index']);
Route::get('/page_cadeira', [App\Http\Controllers\PageCadeiraController::class, 'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);

// Rotas para inserir um novo tampo
Route::get('/admin-tampos', [App\Http\Controllers\TampoController::class, 'index'])->middleware('auth');
Route::post('/admin-tampos', [App\Http\Controllers\TampoController::class, 'insert'])->middleware('auth');

// Rotas para inserir um nova base
Route::get('/admin-bases', [App\Http\Controllers\BaseController::class, 'index'])->middleware('auth');
Route::post('/admin-bases', [App\Http\Controllers\BaseController::class, 'insert'])->middleware('auth');

// Rotas para inserir um nova cadeira
Route::get('/admin-cadeiras', [App\Http\Controllers\CadeiraController::class, 'index'])->middleware('auth');
Route::post('/admin-cadeiras', [App\Http\Controllers\CadeiraController::class, 'insert'])->middleware('auth');

//Rotas para inserir novo tamanho ao sistema
Route::get('/admin-tamanhos', [App\Http\Controllers\TamanhoController::class, 'index'])->middleware('auth');
Route::post('/admin-tamanhos', [App\Http\Controllers\TamanhoController::class, 'insert'])->middleware('auth');

//Rotas para inserir nova linha de produto ao sistema
Route::get('/admin-linhas', [App\Http\Controllers\LinhaController::class, 'index'])->middleware('auth');
Route::post('/admin-linhas', [App\Http\Controllers\LinhaController::class, 'insert'])->middleware('auth');

//Rotas para associar tampos e bases
Route::get('/associartamposebases', [App\Http\Controllers\AssociartamposebsesController::class, 'index'])->middleware('auth');
Route::post('/associartamposebases', [App\Http\Controllers\AssociartamposebsesController::class, 'insert'])->middleware('auth');

