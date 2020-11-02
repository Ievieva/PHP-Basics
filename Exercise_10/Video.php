<?php


class Video
{
    private string $title;
    private bool $inStore = true;
    private array $rating;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function inStore(): bool
    {
        return $this->inStore;
    }

    public function checkedOut(): void
    {
        if ($this->inStore) {
            $this->inStore = false;
        }
    }

    public function returned(): void
    {
        if (!$this->inStore) {
            $this->inStore = true;
        }
    }

    public function receiveRating(float $rating): void
    {
        if ($rating) {
            $this->rating[] = $rating;
        }
    }

    public function averageRating(): float
    {
        return round(array_sum($this->rating) / count($this->rating), 1);
    }
}
