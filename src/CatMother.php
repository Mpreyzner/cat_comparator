<?php

namespace CatComparator;


class CatMother
{

    //this is example of object mother without using the test data builder, but we can combine those two
    public static function blackCatWithFourLimbs()
    {
        return new Cat('black', 2, 5);
    }

    public static function whiteCatWithFourLimbs()
    {
        return new Cat('white', 2, 5);
    }

    public static function blackCatWithNoLimbs()
    {
        $cat = new Cat('black', 2, 5);
        $cat->cutLimb();
        $cat->cutLimb();
        $cat->cutLimb();
        $cat->cutLimb();

        return $cat;
    }

    public static function whiteCatWithNoLimbs()
    {
        $cat = new Cat('white', 2, 5);
        $cat->cutLimb();
        $cat->cutLimb();
        $cat->cutLimb();
        $cat->cutLimb();

        return $cat;
    }
}
