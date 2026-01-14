<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Movie;

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
}
