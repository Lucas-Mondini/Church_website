<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user', [TasksController::class, 'index']);
Route::post('user', [TasksController::class, 'store']);
