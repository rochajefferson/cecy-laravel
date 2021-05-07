<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cecy\CombosController;
use App\Http\Controllers\Cecy\CourseController;
use App\Http\Controllers\Cecy\ParticipantController;
use App\Http\Controllers\Cecy\PlanningController;
use App\Http\Controllers\Cecy\PlanningDetailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//RUTAS DE COMBOS
Route::get('/combo', [CombosController::class, 'show']);
Route::get('/combo/edicion', [CombosController::class, 'showData']);

//RUTAS DE CURSOS
Route::get('/list', [CourseController::class, 'index']);
Route::get('/disabled', [CourseController::class, 'disabled']);
Route::post('/create', [CourseController::class, 'createCourse']);
Route::post('/update', [CourseController::class, 'updated']);
Route::post('/show', [CourseController::class, 'show']);
Route::post('/edit', [CourseController::class, 'edit']);
Route::post('/delete', [CourseController::class, 'destroy']);
Route::post('/enabled', [CourseController::class, 'enabled']);

//RUTAS DE PLANIFICACION
Route::post('/planning/create', [PlanningController::class, 'create']);
Route::post('/planning/edit', [PlanningController::class, 'edit']);
Route::post('/planning/update', [PlanningController::class, 'update']);


//RUTAS DE DETALLE PLANIFICACION
Route::post('/plannig_details/list', [PlanningDetailController::class, 'show']);
Route::post('/plannig_details/create', [PlanningDetailController::class, 'create']);
Route::post('/plannig_details/update', [PlanningDetailController::class, 'update']);
Route::post('/plannig_details/delete', [PlanningDetailController::class, 'destroy']);

//VERIFICAR PARTICIPANTE
Route::post('/participant/verified', [ParticipantController::class, 'index']);
Route::get('/participant/load', [ParticipantController::class, 'load']);
Route::post('/participant/create', [ParticipantController::class, 'store']);

