<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getTasks', [TaskController::class, 'getTasks']);
Route::post('storeTask', [TaskController::class, 'storeTask']);
Route::post('updateTask/{id}', [TaskController::class, 'updateTask']);
Route::post('deleteTask/{id}', [TaskController::class, 'deleteTask']);
