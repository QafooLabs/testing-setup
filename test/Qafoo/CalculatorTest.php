<?php

namespace Qafoo;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAddTwoNumbers()
    {
        $calculator = new Calculator();

        $sum = $calculator->add(2, 3);

        $this->assertSame(5, $sum);
    }

    public function testAddZero()
    {
        $calculator = new Calculator();

        $sum  = $calculator->add(1, 0);

        $this->assertSame(1,$sum);
    }
}
