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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('categoria', CategoriaController::class);
Route::resource('curso', CursoController::class);
//bloque
Route::get('curso/{id}/bloque/', [App\Http\Controllers\BloqueController::class, 'index'])->name('bloque.index')->middleware('auth');
Route::get('curso/{id}/bloque/create', [App\Http\Controllers\BloqueController::class, 'create'])->name('bloque.create')->middleware('auth');
Route::post('curso/{id}/bloque/store', [App\Http\Controllers\BloqueController::class, 'store'])->name('bloque.store')->middleware('auth');

//video
Route::get('curso/{id}/bloque/{id_bloque}', [App\Http\Controllers\VideoController::class, 'video_lista'])->name('video.lista')->middleware('auth');
Route::get('curso/{id}/bloque/{id_bloque}/video/create', [App\Http\Controllers\VideoController::class, 'create'])->name('video.create')->middleware('auth');
Route::post('curso/{id}/bloque/{id_bloque}/video/store', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store')->middleware('auth');
