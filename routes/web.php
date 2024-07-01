<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource("dashboard", DashboardController::class);

Route::resource("user", UserController::class);

Route::resource("login", LoginController::class);
