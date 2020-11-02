<?php


class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(
        string $title,
        string $studio,
        string $rating
    )
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public static function constructPG(string $title, string $studio)
    {
        return new Movie($title, $studio, 'PG');
    }

    public function getPG(array $movies): ?array
    {
        $moviesPG = [];
        foreach ($movies as $movie) {
            if ($movie['rating'] = 'PG') {
                $moviesPG[] = $movie;
            }
        }
        return $moviesPG;
    }
}
