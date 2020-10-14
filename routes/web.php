<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('tasks', [TasksController::class, 'index']);
Route::post('register_task', [TasksController::class, 'store']);
Route::get('task/{id}', [TasksController::class, 'show']);
