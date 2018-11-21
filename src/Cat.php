<?php

namespace CatComparator;


class Cat
{
    private $color;
    private $numberOfEyes;
    private $weight;
    private $numberOfLimbs = 4;
    private $hasTail = true;

    public function __construct(string $color, int $numberOfEyes, float $weight)
    {
        $this->color = $color;
        $this->numberOfEyes = $numberOfEyes;
        $this->weight = $weight;
    }

    public function cutTail()
    {
        $this->hasTail = false;
    }

    public function feed()
    {
        $this->weight += 0.02;
    }

    public function cutLimb()
    {
        if ($this->numberOfLimbs <= 0) {
            throw new \Exception('Cat doesn\'t have any limbs left');
        }
        $this->numberOfLimbs -= 1;
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberOfEyes(): int
    {
        return $this->numberOfEyes;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getNumberOfLimbs(): int
    {
        return $this->numberOfLimbs;
    }

    public function hasTail(): bool
    {
        return $this->hasTail;
    }

}

