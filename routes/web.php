<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TasksController;
Route::get('user', [TasksController::class, 'index']);
