<?php

class MoviesCollection
{
    private array $movies = [];

    public function add($movie): void
    {
        /** @var Movie $movie */
        $this->movies[] = $movie;
    }
}
