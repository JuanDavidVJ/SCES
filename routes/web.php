<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
<<<<<<< HEAD
use App\Http\Controllers\AprendicesController;
=======
use App\Http\Controllers\FichasController;

>>>>>>> 6c17897f5224f65fcc9e6b9773f326f5a346a8dc


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
<<<<<<< HEAD
//Ruta Aprendices
Route::resource('aprendices', AprendicesController::class);
=======

//Ruta Fichas
Route::resource('fichas', FichasController::class);
>>>>>>> 6c17897f5224f65fcc9e6b9773f326f5a346a8dc
