<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;

Route::get(
    '/',
    [HomeController::class, "homeAction"]
)->name("pages.home");

//Routes des index movies
Route::get(
    '/movies/popular',
    [MoviesController::class, "popular"]
)->name("movies.popular");
Route::get(
    '/movies/now-playing',
    [MoviesController::class, "nowPlaying"]
)->name("movies.actual");
Route::get(
    '/movies/up-coming',
    [MoviesController::class, "upComing"]
)->name("movies.upcoming");
Route::get(
    '/movies/top-rated',
    [MoviesController::class, "topRated"]
)->name("movies.toprated");

//Show
Route::get(
    '/movies/popular/{movie}',
    [MoviesController::class, "show"]
)->name("movies.show");

