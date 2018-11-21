<?php


namespace CatComparator;


class CatComparator
{
    public function areDifferent(Cat $cat1, Cat $cat2): bool
    {
        return !($cat1 == $cat2);
    }

}
