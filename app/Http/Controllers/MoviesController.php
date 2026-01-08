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
    public function index(){
        $popularMovies = $this->tmdbService->popularMovies();
        return view('movies.index', compact('popularMovies'));
    }
    public function show(int $id){
    $movie = $this->tmdbService->findOnePopularMovieById($id);
    return view('movies.show', compact('movie'));
    }
}
