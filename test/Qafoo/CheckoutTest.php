<?php

namespace Qafoo;

class CheckoutTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Qafoo\Checkout
     */
    private $checkout;

    public function setUp()
    {
        $this->checkout = new Checkout();
    }

    public function testScanOneItem()
    {
        $this->checkout->scan('A');

        $this->assertEquals(
            23.42,
            $this->checkout->getSum()
        );
    }

    public function testScanMultipleItems()
    {
        $this->checkout->scan('A');
        $this->checkout->scan('B');

        $this->assertEquals(33.42, $this->checkout->getSum());
    }
}
