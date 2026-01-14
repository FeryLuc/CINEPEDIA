<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TmdbService;

class TvShowController extends Controller

{
    protected $tmdbService;
    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function onAir()
    {
        $onAirTvShows = $this->tmdbService->tvShowOnAir();
        return view('tvShows.onair', compact('onAirTvShows'));
    }

    public function popular()
    {
        $popularTvShows = $this->tmdbService->popularTvShows();
        return view('tvshows.popular', compact('popularTvShows'));
    }

    public function topRated()
    {
        $topRatedTvShows = $this->tmdbService->topRatedTvShows();
        return view('tvshows.toprated', compact('topRatedTvShows'));
    }

    public function show(int $id)
    {
        
        $tvShow = $this->tmdbService->findOneTvShowById($id);
        return view('tvshows.show', compact('tvShow'));
    }
}
