<?php

namespace App\Models;

class Movie
{

    public function __construct(
        public string $id,
        public string $title,
        public string $resume,
        public string $note,
        public string $posterPath,
    ) {}

    public static function fromApi(array $data): self
    {
        return new self(
            $data['id'],
            $data['title'],
            $data['overview'],
            $data['vote_average'],
            $data['poster_path'],

        );
    }
}
