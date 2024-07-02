<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource("dashboard", DashboardController::class);

Route::resource("user", UserController::class);

Route::resource("login", LoginController::class);

Route::resource("anggota", AnggotaController::class);

Route::get("logout", [DashboardController::class, "logout"])->name("logout");

Route::resource("buku", BukuController::class);

Route::resource("transaksi", TransaksiController::class);
