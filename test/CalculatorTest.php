<?php

use Xieqing\Jisuanqi\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtraction()
    {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

}