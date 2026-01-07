<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TvShow
{
    public function __construct(
        public string $id,
        public string $name,
        public string $resume,
        public string $note,
        public string $posterPath,
    ) {}

    public static function fromApi(array $data): self
    {
        return new self(
            $data['id'],
            $data['name'],
            $data['overview'],
            $data['vote_average'],
            $data['poster_path'],

        );
    }
}
