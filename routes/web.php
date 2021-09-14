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
// use App\Http\Controllers\ImpugnacionesController;
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
use App\Http\Controllers\RegistroUsuarios;
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
Route::resource('aprendices', AprendicesController::class)->middleware('auth');

//Ruta Comite
Route::resource('comite', ComiteController::class)->middleware('auth');

//Ruta Fichas
Route::resource('fichas', FichasController::class)->middleware('auth');



//Ruta Actas de comites
Route::resource('ActaComite', ActaComiteController::class)->middleware('auth');

//Ruta Acto Administrativo Sanciones
Route::resource('actoadministrativo', ActoAdministrativoSancionesController::class)->middleware('auth');

//Ruta Evidencias
Route::resource('evidencias', EvidenciasController::class)->middleware('auth');

//Ruta Novedades
Route::resource('novedades', NovedadesController::class)->middleware('auth');

//Ruta Faltas
Route::resource('faltas', FaltasController::class)->middleware('auth');



//Ruta Estimulos
Route::resource('estimulos', EstimulosController::class)->middleware('auth');

//Ruta Ingreso
Route::get('/ingreso', [IngresoController::class, 'index']);

// Ruta Antecedentes
Route::resource('antecedentes', AntecedentesController::class)->middleware('auth');

//Ruta Citacion
Route::resource('Citacion', CitacionController::class)->middleware('auth');



//Ruta Solicitar Comite
Route::resource('solicitarComite', SolicitarComiteController::class)->middleware('auth');

//Ruta Recursos de Reposición
Route::resource('recursosReposicion', RecursosController::class)->middleware('auth');

//Ruta Registro Usuarios
Route::resource('RegistrarUsuarios', RegistroUsuarios::class)->middleware('auth');
