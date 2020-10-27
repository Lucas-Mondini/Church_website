<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('task', [TasksController::class, 'index'])->name("task.index");
Route::get('register', [TasksController::class, 'create'])->name("task.create");
Route::post('task', [TasksController::class, 'store']);
Route::get('task/{id}', [TasksController::class, 'show'])->name("task.show");
Route::get('task/{id}/edit', [TasksController::class, 'edit'])->name("task.edit");
Route::put('task/{id}', [TasksController::class, 'update']);
Route::delete('task/{id}', [TasksController::class, 'destroy']);
