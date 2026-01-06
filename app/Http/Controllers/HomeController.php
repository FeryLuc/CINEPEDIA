<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TmdbService;

class HomeController extends Controller
{
    protected $tmdbService;
    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }


    public function homeAction()
    {
        $popularMovies = $this->tmdbService->popularMovies();
        return view("pages.home", compact('popularMovies'));
    }
}
