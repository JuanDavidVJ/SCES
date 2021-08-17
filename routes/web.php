<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\FichasController;
use App\Http\Controllers\CondicionamientoMatriculaController;



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

//Ruta del Inicio
Route::get('/', [InicioController::class, 'index']);

//Ruta Aprendices
Route::resource('aprendices', AprendicesController::class);


//Ruta Fichas
Route::resource('fichas', FichasController::class);

//Ruta Condicionamiento de Matricula
Route::resource('condicionamientos', CondicionamientoMatriculaController::class);
