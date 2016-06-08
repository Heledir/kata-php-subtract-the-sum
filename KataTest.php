<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testAllPositive()
    {
        $this->assertEquals(15, positiveSum([1, 2, 3, 4, 5]));
    }

    public function testOneNegative()
    {
        $this->markTestSkipped();
        $this->assertEquals(13, positiveSum([1, -2, 3, 4, 5]));
    }

    public function testEmptyArray()
    {
        $this->markTestSkipped();
        $this->assertEquals(0, positiveSum([]));
    }

    public function testAllNegative()
    {
        $this->markTestSkipped();
        $this->assertEquals(0, positiveSum([-1, -2, -3, -4, -5]));
    }

    public function testTwoNegative()
    {
        $this->markTestSkipped();
        $this->assertEquals(9, positiveSum([-1, 2, 3, 4, -5]));
    }
}
