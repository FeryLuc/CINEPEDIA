<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;

Route::get(
    '/',
    [HomeController::class, "homeAction"]
)->name("pages.home");

//Routes des movies
Route::get(
    '/movies',
    [MoviesController::class, "index"]
)->name("movies.index");

