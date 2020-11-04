<?php

class VideoStore
{
    private array $videos = [];

    public function addVideo($title)
    {
        $videos[] = new Video($title);
    }

    public function checkoutVideo(string $title): void
    {
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($title === $video->title()) {
                $video->checkedOut();
            }
        }
    }

    public function returnVideo(string $title): void
    {
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($title === $video->title()) {
                $video->returned();
            }
        }
    }

    public function rateVideo(string $title, float $rating): void
    {
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($title === $video->title()) {
                $video->receiveRating($rating);
            }
        }
    }

    public function allVideos(): array
    {
        $inventory = [];
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($video->inStore()) {
                $inventory[] = $video->title();
            }
        }
        return $inventory;
    }
}