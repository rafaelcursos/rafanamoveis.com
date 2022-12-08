<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Rotas do front-end ( Rotas do site )
Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);
Route::get('/site/bases/{id}', [App\Http\Controllers\SiteController::class, 'bases']);
Route::get('/site/bases/cor/{vitrine_id}/{id}', [App\Http\Controllers\SiteController::class, 'baseCor']);
Route::get('/site/bases/tamanho/{vitrine_id}/{id}', [App\Http\Controllers\SiteController::class, 'baseTamanho']);
Route::get('/site/tampos/{id}', [App\Http\Controllers\SiteController::class, 'tampos']);
Route::get('/site/tampos/cor/{vitrine_id}/{id}', [App\Http\Controllers\SiteController::class, 'tampoCor']);
Route::get('/site/tampos/tamanho/{vitrine_id}/{id}', [App\Http\Controllers\SiteController::class, 'tampoTamanho']);
Route::get('/site/cadeiras/{id}', [App\Http\Controllers\SiteController::class, 'cadeiras']);
Route::get('/site/imprimir', [App\Http\Controllers\SiteController::class, 'imprimir']);

//Rotas do back-end ( Rotas do admin )
Auth::routes();

//primeira rota quando acessamos o painel ( Retorna todos os produtos da vitrine )
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas da vitrine
Route::get('/vitrine/novo', [App\Http\Controllers\VitrineController::class, 'novo'])->middleware('auth');
Route::post('/vitrine/novo', [App\Http\Controllers\VitrineController::class, 'store'])->middleware('auth');
Route::get('/vitrine/editar/{id}', [App\Http\Controllers\VitrineController::class, 'editar'])->middleware('auth');
Route::get('/vitrine/atualizar/{id}', [App\Http\Controllers\VitrineController::class, 'update'])->middleware('auth');
Route::post( '/vitrine/atualizar/{id}', [App\Http\Controllers\VitrineController::class, 'updateAction'] )->middleware('auth');
Route::get('/vitrine/base/{id}', [App\Http\Controllers\VitrineController::class, 'conectBase'])->middleware('auth');
Route::post( '/vitrine/base/{id}', [App\Http\Controllers\VitrineController::class, 'conectBaseAction'] )->middleware('auth');
Route::get( '/vitrine/base/desassociar/{vitrine_id}/{base_id}', [App\Http\Controllers\VitrineController::class, 'baseDesassociar'] )->middleware('auth');
Route::get('/vitrine/tampo/{id}', [App\Http\Controllers\VitrineController::class, 'conectTampo'])->middleware('auth');
Route::post( '/vitrine/tampo/{id}', [App\Http\Controllers\VitrineController::class, 'conectTampoAction'] )->middleware('auth');
Route::get( '/vitrine/tampo/desassociar/{vitrine_id}/{base_id}', [App\Http\Controllers\VitrineController::class, 'tampoDesassociar'] )->middleware('auth');
Route::get('/vitrine/cadeira/{id}', [App\Http\Controllers\VitrineController::class, 'conectCadeira'])->middleware('auth');
Route::post( '/vitrine/cadeira/{id}', [App\Http\Controllers\VitrineController::class, 'conectCadeiraAction'] )->middleware('auth');
Route::get( '/vitrine/cadeira/desassociar/{vitrine_id}/{base_id}', [App\Http\Controllers\VitrineController::class, 'cadeiraDesassociar'] )->middleware('auth');
Route::delete( '/vitrine/delete/{id}', [App\Http\Controllers\VitrineController::class, 'destroy'] )->middleware('auth');

//Rotas do back-end
//Bases
Route::get('/bases', [App\Http\Controllers\BaseController::class, 'index'])->middleware('auth');
Route::get('/bases/novo', [App\Http\Controllers\BaseController::class, 'novo'])->middleware('auth');
Route::post('/bases/novo', [App\Http\Controllers\BaseController::class, 'store'])->middleware('auth');
Route::get('/bases/editar/{id}', [App\Http\Controllers\BaseController::class, 'editar'])->middleware('auth');
Route::get('/bases/atualizar/{id}', [App\Http\Controllers\BaseController::class, 'update'])->middleware('auth');
Route::get('/bases/tamanho/{id}', [App\Http\Controllers\BaseController::class, 'tamanho'])->middleware('auth');
Route::post('/bases/tamanho/{id}', [App\Http\Controllers\BaseController::class, 'tamanhoAction'])->middleware('auth');
Route::delete('/bases/tamanho/delete/{id}', [App\Http\Controllers\BaseController::class, 'tamanhoDestroy'])->middleware('auth');
Route::get('/bases/cor/{id}', [App\Http\Controllers\BaseController::class, 'cor'])->middleware('auth');
Route::post('/bases/cor/{id}', [App\Http\Controllers\BaseController::class, 'corAction'])->middleware('auth');
Route::get('/bases/cor/desassociar/{cor_id}/{base_id}', [App\Http\Controllers\BaseController::class, 'corDesassociar'])->middleware('auth');
Route::post('/bases/atualizar/{id}', [App\Http\Controllers\BaseController::class, 'updateAction'])->middleware('auth');
Route::delete( '/bases/delete/{id}', [App\Http\Controllers\BaseController::class, 'destroy'] )->middleware('auth');

//Tampos
Route::get('/tampos', [App\Http\Controllers\TampoController::class, 'index'])->middleware('auth');
Route::get('/tampos/novo', [App\Http\Controllers\TampoController::class, 'novo'])->middleware('auth');
Route::post('/tampos/novo', [App\Http\Controllers\TampoController::class, 'store'])->middleware('auth');
Route::get('/tampos/editar/{id}', [App\Http\Controllers\TampoController::class, 'editar'])->middleware('auth');
Route::get('/tampos/atualizar/{id}', [App\Http\Controllers\TampoController::class, 'update'])->middleware('auth');
Route::get('/tampos/tamanho/{id}', [App\Http\Controllers\TampoController::class, 'tamanho'])->middleware('auth');
Route::post('/tampos/tamanho/{id}', [App\Http\Controllers\TampoController::class, 'tamanhoAction'])->middleware('auth');
Route::delete('/tampos/tamanho/delete/{id}', [App\Http\Controllers\TampoController::class, 'tamanhoDestroy'])->middleware('auth');
Route::get('/tampos/cor/{id}', [App\Http\Controllers\TampoController::class, 'cor'])->middleware('auth');
Route::post('/tampos/cor/{id}', [App\Http\Controllers\TampoController::class, 'corAction'])->middleware('auth');
Route::get('/tampos/cor/desassociar/{cor_id}/{tampo_id}', [App\Http\Controllers\TampoController::class, 'corDesassociar'])->middleware('auth');
Route::post('/tampos/atualizar/{id}', [App\Http\Controllers\TampoController::class, 'updateAction'])->middleware('auth');
Route::delete( '/tampos/delete/{id}', [App\Http\Controllers\TampoController::class, 'destroy'] )->middleware('auth');

//Cadeiras
Route::get('/cadeiras', [App\Http\Controllers\CadeiraController::class, 'index'])->middleware('auth');
Route::get('/cadeiras/novo', [App\Http\Controllers\CadeiraController::class, 'novo'])->middleware('auth');
Route::post('/cadeiras/novo', [App\Http\Controllers\CadeiraController::class, 'store'])->middleware('auth');
Route::get('/cadeiras/editar/{id}', [App\Http\Controllers\CadeiraController::class, 'editar'])->middleware('auth');
Route::get('/cadeiras/atualizar/{id}', [App\Http\Controllers\CadeiraController::class, 'update'])->middleware('auth');
Route::get('/cadeiras/tamanho/{id}', [App\Http\Controllers\CadeiraController::class, 'tamanho'])->middleware('auth');
Route::post('/cadeiras/tamanho/{id}', [App\Http\Controllers\CadeiraController::class, 'tamanhoAction'])->middleware('auth');
Route::delete('/cadeiras/tamanho/delete/{id}', [App\Http\Controllers\CadeiraController::class, 'tamanhoDestroy'])->middleware('auth');
Route::get('/cadeiras/cor/{id}', [App\Http\Controllers\CadeiraController::class, 'cor'])->middleware('auth');
Route::post('/cadeiras/cor/{id}', [App\Http\Controllers\CadeiraController::class, 'corAction'])->middleware('auth');
Route::get('/cadeiras/cor/desassociar/{cor_id}/{cadeira_id}', [App\Http\Controllers\CadeiraController::class, 'corDesassociar'])->middleware('auth');
Route::post('/cadeiras/atualizar/{id}', [App\Http\Controllers\CadeiraController::class, 'updateAction'])->middleware('auth');
Route::delete( '/cadeiras/delete/{id}', [App\Http\Controllers\CadeiraController::class, 'destroy'] )->middleware('auth');