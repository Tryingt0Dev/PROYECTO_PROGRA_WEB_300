<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropuestaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/CrearPropuesta',[PropuestaController::class,'index'])->name('propuesta.index');
Route::get('/EditarPropuesta',[PropuestaController::class,'edit'])->name('propuesta.edit');