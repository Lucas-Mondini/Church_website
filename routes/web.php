<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('task', [TasksController::class, 'index']);
Route::get('register', [TasksController::class, 'create']);
Route::post('task', [TasksController::class, 'store']);
Route::get('task/{id}', [TasksController::class, 'show']);
Route::get('task/{id}/edit', [TasksController::class, 'edit']);
Route::put('task/{id}', [TasksController::class, 'update']);
