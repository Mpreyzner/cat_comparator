<?php


namespace Eden\Tests\Builders;


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

        $this->assertTrue($comparator->areDifferent($cat1, $cat2));
    }

    /**
     * @test
     */
    public function sameNumberOfLimbs()
    {

    }

    /**
     * @test
     */
    public function differentColor()
    {

    }
}
