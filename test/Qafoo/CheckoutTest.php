<?php

namespace Qafoo;

class CheckoutTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Qafoo\Checkout
     */
    private $checkout;

    /**
     * @var \Qafoo\Display
     */
    private $displayMock;

    public function setUp()
    {
        $this->displayMock = $this->getMockBuilder('Qafoo\\Display')
            ->getMock();

        $this->checkout = new Checkout($this->displayMock);
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

    public function testDisplayIsTriggered()
    {
        $this->displayMock->expects($this->exactly(2))
            ->method('display')
            ->with($this->isType('float'));

        $this->checkout->scan('A');
        $this->checkout->scan('B');
    }
}
