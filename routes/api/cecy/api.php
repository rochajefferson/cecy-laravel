<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cecy\CombosController;
use App\Http\Controllers\Cecy\CourseController;
use App\Http\Controllers\Cecy\PlanningController;

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

Route::get('/combo', [CombosController::class, 'show']);
Route::get('/list', [CourseController::class, 'index']);

Route::post('/create', [CourseController::class, 'createCourse']);
Route::post('/update', [CourseController::class, 'updated']);
Route::post('/show', [CourseController::class, 'show']);
Route::post('/edit', [CourseController::class, 'edit']);

Route::delete('/delete/{id}', [CourseController::class, 'destroy']);

Route::post('/planning/create', [PlanningController::class, 'create']);


