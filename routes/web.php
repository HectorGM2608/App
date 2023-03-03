<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlmaceneController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\SolicitudeController;
use App\Http\Controllers\ArticuloController;

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

Route::view('/', 'welcome');


Route::view('/layout', 'layout')->name('layout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('almacenes', AlmaceneController::class);
Route::resource('proveedores', ProveedoreController::class);
Route::resource('solicitudes', SolicitudeController::class);
Route::resource('articulos', ArticuloController::class);
