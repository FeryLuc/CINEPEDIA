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
    public function actualMovies(): array
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/now_playing", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json('results');

        return collect($data)->map(function ($m) {
            return Movie::fromApi($m);
        })->toArray();
    }
    public function upComingMovies(): array
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/upcoming", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json('results');

        return collect($data)->map(function ($m) {
            return Movie::fromApi($m);
        })->toArray();
    }
    public function topRatedMovies(): array
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/top_rated", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json('results');

        return collect($data)->map(function ($m) {
            return Movie::fromApi($m);
        })->toArray();
    }
    public function findOneMovieById(int $id): Movie
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json();

        return Movie::fromApi($data);
    }

    public function randMovie()
    {
        $rand = rand(1, 500);
        $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
            'page' => $rand
        ])->json('results');
        $rand2 = rand(0, 19);
        $movieId = $response[$rand2]['id'];
        $resp = Http::get("https://api.themoviedb.org/3/movie/{$movieId}", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',

        ])->json();

        return Movie::fromApi($resp);
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
