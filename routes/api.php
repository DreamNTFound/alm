<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::prefix('/students')->group(function () {
//     Route::get('/', [StudentController::class, 'index']);
//     Route::get('/{id}', [StudentController::class, 'select']);
//     Route::post('/', [StudentController::class, 'create']);
//     Route::patch('/{id}', [StudentController::class, 'update']);
//     Route::delete('/{id}', [StudentController::class, 'delete']);
// });

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'select']);
Route::post('/students', [StudentController::class, 'create']);
Route::patch('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'delete']);

Route::get('/students/{id}/subjects', [StudentController::class, 'subjects']);
