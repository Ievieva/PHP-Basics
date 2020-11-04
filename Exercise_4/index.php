<?php

require_once 'Movie.php';

$movies = new MoviesCollection();
$movies->add(new Movie(
    'Casino Royale',
    'Eon Productions',
    'PG13'));
$movies->add(new Movie(
    'Glass',
    'Buena Vista International',
    'PG13'));
$movies->add(new Movie(
    'Spider-Man: Into the Spider-Verse',
    'Columbia Pictures',
    'PG'
));
