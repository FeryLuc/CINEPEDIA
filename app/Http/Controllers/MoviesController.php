<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TmdbService;

class MoviesController extends Controller
{
    protected $tmdbService;
    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }
    public function popular(){
        $popularMovies = $this->tmdbService->popularMovies();
        return view('movies.popular', compact('popularMovies'));
    }
    public function nowPlaying(){
        $nowPlayingMovies = $this->tmdbService->nowPlaying();
        return view('movies.nowplaying', compact('nowPlayingMovies'));
    }
    public function upComing(){
        $upComingMovies = $this->tmdbService->upComingMovies();
        return view('movies.upcoming', compact('upComingMovies'));
    }
    public function topRated(){
        $topRatedMovies = $this->tmdbService->topRatedMovies();
        return view('movies.toprated', compact('topRatedMovies'));
    }
    public function show(int $id){
    $movie = $this->tmdbService->findOneMovieById($id);
    return view('movies.show', compact('movie'));
    }
}
