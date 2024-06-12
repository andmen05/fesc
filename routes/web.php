<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AspiranteController;
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

Route::controller(AdministradorController::class)->group( function() {
    Route::get('Admin.ingreso', 'index')->name('indexAdm');
    //Route::post('formulario', 'store')->name('storepqr');
    // Route::get('formulario', 'show');
    Route::get('Admin.vista', 'show')->name('showAdmin');

});





//ruta del metodo get es que es para mostrar
route::get('Asp.registro', [AspiranteController::class, 'index'])->name('indexAsp'); // 
//ruta del metodo post ese es el que envia los datos del formulario y solo se utiliza con la funcion store, edit, update, destroy 
Route::post('Asp.encuesta/{id}', [AspiranteController::class, 'store'])->name('storeAsp');
