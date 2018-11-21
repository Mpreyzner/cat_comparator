<?php


namespace CatComparator\Tests;

use CatComparator\CatBuilder;
use CatComparator\CatComparator;
use PHPUnit\Framework\TestCase;

class CatComparatorTest extends TestCase
{

    /**
     * @test
     */
    public function sameCats()
    {

        $builder = new CatBuilder();
        $builder->withNumberOfEyes(1);
        $cat1 = $builder->build();

        $builder = new CatBuilder();
        $builder->withNumberOfEyes(1);
        $cat2 = $builder->build();

        $comparator = new CatComparator();

        $this->assertFalse($comparator->areDifferent($cat1, $cat2));
    }

    /**
     * @test
     */
    public function sameNumberOfLimbsDifferentColor()
    {


        $builder = new CatBuilder();
        $builder->withNumberOfLimbs(0);
        $builder->withColor('white');
        $cat1 = $builder->build();

        $builder = new CatBuilder();
        $builder->withNumberOfLimbs(0);
        $builder->withColor('black');

        $cat2 = $builder->build();

        $comparator = new CatComparator();
        $this->assertTrue($comparator->areDifferent($cat1, $cat2));

    }

    /**
     * @test
     */
    public function differentColorAllLimbs()
    {

        $builder = new CatBuilder();
        $builder->withColor('white');
        $cat1 = $builder->build();

        $builder = new CatBuilder();
        $builder->withColor('black');

        $cat2 = $builder->build();

        $comparator = new CatComparator();
        $this->assertTrue($comparator->areDifferent($cat1, $cat2));
    }
}
