<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::view('/', 'enunciado');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'mostrar'])->name('admin')->middleware('auth');

Route::get('/viajes', [UserController::class, 'mostrar'])->name('viajes')->middleware('auth');

Route::put('/reservar/{$id}', [UserController::class, 'reservar'])->name('reservar')->middleware('auth');

Route::get('/viaje-conductor', [UserController::class, 'mostrar_viaje_conductor'])->name('viaje-conductor')->middleware('auth');

