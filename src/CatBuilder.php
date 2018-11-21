<?php


namespace CatComparator;


class CatBuilder
{
    private $color = 'black';
    private $numberOfEyes = 2;
    private $weight = 5;
    private $numberOfLimbs = 4;
    private $hasTail = true;

    public function withColor(string $color)
    {
        $this->color = $color;
        return $this;
    }

    public function withNumberOfEyes(int $numberOfEyes)
    {
        $this->numberOfEyes = $numberOfEyes;
        return $this;

    }

    public function withWeight(int $weight)
    {
        $this->weight = $weight;
        return $this;

    }

    public function withNumberOfLimbs(int $numberOfLimbs)
    {
        $this->numberOfLimbs = $numberOfLimbs;
        return $this;

    }

    public function withNoTail(): void
    {
        $this->hasTail = false;
    }


    public function build(): Cat
    {
        $cat = new Cat($this->color, $this->numberOfEyes, $this->weight);

        if (!$this->hasTail) {
            $cat->cutTail();
        }

        if ($this->numberOfLimbs !== 4) {
            $limbsDelta = 4 - $this->numberOfLimbs;
            for ($i = 0; $i <= $limbsDelta; $i++) {
                $cat->cutLimb();
            }
        }


        return $cat;
    }


}
