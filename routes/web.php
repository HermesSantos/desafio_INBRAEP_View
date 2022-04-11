<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tasksController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/task', tasksController::class);