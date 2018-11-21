<?php


namespace CatComparator\Tests;

use CatComparator\Cat;
use CatComparator\CatComparator;
use PHPUnit\Framework\TestCase;

class CatComparatorWithoutBuilderTest extends TestCase
{

    /**
     * @test
     */
    public function sameCats()
    {

        $cat1 = new Cat('black', 1, 4);
        $cat2 = new Cat('black', 1, 4);
        //we have to specify the properties we don't really care about like weight
        $comparator = new CatComparator();

        $this->assertFalse($comparator->areDifferent($cat1, $cat2));
    }

    /**
     * @test
     */
    public function sameNumberOfLimbsDifferentColor()
    {

        $cat1 = new Cat('black', 1, 4);
        $cat1->cutLimb();
        $cat1->cutLimb();
        $cat1->cutLimb();
        $cat1->cutLimb();

        $cat2 = new Cat('white', 1, 4);
        $cat2->cutLimb();
        $cat2->cutLimb();
        $cat2->cutLimb();
        $cat2->cutLimb();

        $comparator = new CatComparator();
        $this->assertTrue($comparator->areDifferent($cat1, $cat2));

    }

    /**
     * @test
     */
    public function differentColorAllLimbs()
    {

        $cat1 = new Cat('black', 1, 4);
        $cat2 = new Cat('white', 1, 4);

        $comparator = new CatComparator();
        $this->assertTrue($comparator->areDifferent($cat1, $cat2));
    }
}
