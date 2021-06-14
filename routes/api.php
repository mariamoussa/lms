<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student', [\App\Http\Controllers\StudentController::class, 'createStudent']);
Route::get('/student', [\App\Http\Controllers\StudentController::class, 'getAllStudent']);
Route::get('/student/{id}', [\App\Http\Controllers\StudentController::class, 'getStudent']);
Route::put('/student/{id}', [\App\Http\Controllers\StudentController::class, 'updateStudent']);
Route::delete('/student/{id}', [\App\Http\Controllers\StudentController::class, 'deleteStudent']);

Route::post('/classroom',[\App\Http\Controllers\ClassroomController::class, 'createClassroom']);
Route::get('/classroom',[\App\Http\Controllers\ClassroomController::class, 'getAllClassroom']);
Route::get('/classroom/{id}', [\App\Http\Controllers\ClassroomController::class, 'getClassroom']);
Route::put('/classroom/{id}', [\App\Http\Controllers\ClassroomController::class, 'updateClassroom']);
Route::delete('/classroom/{id}', [\App\Http\Controllers\ClassroomController::class, 'deleteClassroom']);

