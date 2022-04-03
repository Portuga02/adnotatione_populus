<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/users', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('/users/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('/users/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');
Route::get('/users/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('/users/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/users/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');
