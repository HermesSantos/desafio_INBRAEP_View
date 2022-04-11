<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tasksController;

Route::resource('/', tasksController::class);
Route::resource('/task', tasksController::class);