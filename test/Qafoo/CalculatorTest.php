<?php

namespace Qafoo;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testAddTwoNumbers()
    {
        $sum = $this->calculator->add(2, 3);

        $this->assertSame(5, $sum);
    }

    public function testAddZero()
    {
        $sum  = $this->calculator->add(1, 0);

        $this->assertSame(1,$sum);
    }
}
