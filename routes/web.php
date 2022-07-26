<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('categoria', CategoriaController::class)->middleware('auth');
Route::resource('curso', CursoController::class)->middleware('auth');
//bloque
Route::get('curso/{id}/bloque/', [App\Http\Controllers\BloqueController::class, 'index'])->name('bloque.index')->middleware('auth');
Route::get('curso/{id}/bloque/create', [App\Http\Controllers\BloqueController::class, 'create'])->name('bloque.create')->middleware('auth');
Route::post('curso/{id}/bloque/store', [App\Http\Controllers\BloqueController::class, 'store'])->name('bloque.store')->middleware('auth');

//video
Route::get('curso/{id}/bloque/{id_bloque}', [App\Http\Controllers\VideoController::class, 'video_lista'])->name('video.lista')->middleware('auth');
Route::get('curso/{id}/bloque/{id_bloque}/video/create', [App\Http\Controllers\VideoController::class, 'create'])->name('video.create')->middleware('auth');
Route::post('curso/{id}/bloque/{id_bloque}/video/store', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store')->middleware('auth');

//streaming
Route::get('stream/all', [App\Http\Controllers\StreamController::class, 'index'])->name('stream.index')->middleware('auth');

Route::get('stream/{id}', [App\Http\Controllers\StreamController::class, 'categoria'])->name('stream.categoria')->middleware('auth');

Route::post('stream/search', [App\Http\Controllers\StreamController::class, 'search'])->name('stream.search')->middleware('auth');

Route::get('stream/list/{id}', [App\Http\Controllers\StreamController::class, 'list'])->name('stream.list')->middleware('auth');
