<?php

namespace App\Models;

class Movie
{

    public function __construct(
        public string $id,
        public string $title,
        public ?string $resume,
        public ?string $note,
        public ?string $posterPath,
    ) {}

    public static function fromApi(array $data): self
    {
        return new self(
            $data['id'],
            $data['title'],
            $data['overview'] ?? null,
            $data['vote_average'] ?? null,
            $data['poster_path'] ?? null,
        );
    }
    public function posterUrl(string $size = 'w500'): ?string
{
    return $this->posterPath
        ? "https://image.tmdb.org/t/p/{$size}{$this->posterPath}"
        : null;
}
}
