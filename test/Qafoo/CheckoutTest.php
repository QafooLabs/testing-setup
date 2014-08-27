<?php

namespace Qafoo;

class CheckoutTest extends \PHPUnit_Framework_TestCase
{
    public function testScanOneItem()
    {
        $checkout = new Checkout();

        $checkout->scan('A');

        $this->assertEquals(
            23.42,
            $checkout->getSum()
        );
    }

    public function testThrowsExceptio()
    {
        $this->setExpectedException('\RuntimeException');
    }
}
