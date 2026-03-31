<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource("employee", EmployeeController::class);
Route::resource("post", PostController::class);
