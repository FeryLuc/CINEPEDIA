<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvShowController;

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
//Routes des index tv show
Route::get(
    '/tv-shows/on-air',
    [TvShowController::class, "onAir"]
)->name("tvshows.onair");

Route::get(
    '/tv-shows/top-rated',
    [TvShowController::class, "topRated"]
)->name("tvshows.toprated");

Route::get('tv-shows/popular', [TvShowController::class, "popular"])->name("tvshows.popular");

//Show d'un film
Route::get(
    '/movies/popular/{movie}',
    [MoviesController::class, "show"]
)->name("movies.show");

//Show d'un tv show
Route::get(
    '/tv-shows/{tvShow}',
    [TvShowController::class, "show"]
)->name("tvshows.show");
