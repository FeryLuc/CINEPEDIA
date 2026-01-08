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
    public function findOnePopularMovieById(int $id): Movie
    {
        $data = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
            'api_key' => $this->apiKey,
            'language' => 'fr-FR',
        ])->json();

        return Movie::fromApi($data);
    }
}
