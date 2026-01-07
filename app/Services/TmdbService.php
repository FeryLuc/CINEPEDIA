<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Movie;
use App\Models\TvShow;

class TmdbService
{

    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.tmdb.key');
    }
    public function popularMovies(): array
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/popular", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json('results');

        return collect($data)->map(function ($m) {
            return Movie::fromApi($m);
        })->toArray();
    }

    public function nowPlaying(): array
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json('results');
        return collect($data)->map(function ($m) {
            return Movie::fromApi($m);
        })->toArray();
    }
    //série tv
    public function tvShowOnAir(): array
    {
        $data = Http::get("https://api.themoviedb.org/3/tv/on_the_air", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json('results');
        return collect($data)->map(function ($t) {
            return TvShow::fromApi($t);
        })->toArray();
    }
}
