<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get(
    '/',
    [HomeController::class, "homeAction"]
)->name("pages.home");
