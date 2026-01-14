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
        $randMovie = $this->tmdbService->randMovie();
        $nowPlaying = $this->tmdbService->nowPlaying();
        $tvShowOnAir = $this->tmdbService->tvShowOnAir();
        return view("pages.home", compact('randMovie', 'nowPlaying', 'tvShowOnAir'));
    }
}
