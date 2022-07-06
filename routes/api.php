<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ClassroomController;
  

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

 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });

Route::middleware('auth:api')->get('/classroom', function (Request $request) {
    
    return $request->Classroom();
});

Route::get('classrooms', [App\Http\Controllers\API\ClassroomController::class, 'index']);

Route::get('classrooms/{id}', [App\Http\Controllers\API\ClassroomController::class, 'show']);

Route::post('classrooms', [App\Http\Controllers\API\ClassroomController::class, 'store']);

Route::put('classrooms/{id}', [App\Http\Controllers\API\ClassroomController::class, 'update']);

Route::delete('classrooms/{id}', [App\Http\Controllers\API\ClassroomController::class, 'destroy']);




Route::middleware('auth:api')->get('/student', function (Request $request) {
    
    return $request->Student();
});

Route::get('students', [App\Http\Controllers\API\StudentController::class, 'index']);

Route::get('students/{id}', [App\Http\Controllers\API\StudentController::class, 'show']);

Route::post('students', [App\Http\Controllers\API\StudentController::class, 'store']);

Route::put('students/{id}', [App\Http\Controllers\API\StudentController::class, 'update']);

Route::delete('students/{id}', [App\Http\Controllers\API\StudentController::class, 'destroy']);





Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::post('/logout', [RegisterController::class, 'logout']);

