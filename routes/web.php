<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\ComiteController;
use App\Http\Controllers\FichasController;
//use App\Http\Controllers\CondicionamientoMatriculaController;
use App\Http\Controllers\ActaComiteController;
use App\Http\Controllers\ActoAdministrativoSancionesController;
use App\Http\Controllers\EvidenciasController;
use App\Http\Controllers\ImpugnacionesController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\FaltasController;
//use App\Http\Controllers\LlamadosAtencionController;
use App\Http\Controllers\EstimulosController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\AntecedentesController;
use App\Http\Controllers\CitacionController;
use App\Http\Controllers\RecursosController;
//use App\Http\Controllers\PlanMejoramientoController;
use App\Http\Controllers\SolicitarComiteController;
use App\Models\Recursos;

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

//Ruta Comite
Route::resource('comite', ComiteController::class);

//Ruta Fichas
Route::resource('fichas', FichasController::class);



// Ruta Impugnaciones

Route::resource('impugnaciones', ImpugnacionesController::class);

//Ruta Actas de comites
Route::resource('ActaComite', ActaComiteController::class);

//Ruta Acto Administrativo Sanciones
Route::resource('actoadministrativo', ActoAdministrativoSancionesController::class);

//Ruta Evidencias
Route::resource('evidencias', EvidenciasController::class);

//Ruta Novedades
Route::resource('novedades', NovedadesController::class);

//Ruta Faltas
Route::resource('faltas', FaltasController::class);



//Ruta Estimulos
Route::resource('estimulos', EstimulosController::class);

//Ruta Ingreso
Route::get('/ingreso', [IngresoController::class, 'index']);

// Ruta Antecedentes
Route::resource('antecedentes', AntecedentesController::class);

//Ruta Citacion
Route::resource('Citacion', CitacionController::class);



//Ruta Solicitar Comite
Route::resource('solicitarComite', SolicitarComiteController::class);

//Ruta Recursos de Reposición
Route::resource('recursosReposicion', RecursosController::class);
