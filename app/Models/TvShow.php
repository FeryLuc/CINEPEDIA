<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TvShow
{
    public function __construct(
        public string $id,
        public string $name,
        public ?string $resume,
        public ?string $note,
        public ?string $posterPath,
    ) {}

    public static function fromApi(array $data): self
    {
        return new self(
            $data['id'],
            $data['name'],
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
