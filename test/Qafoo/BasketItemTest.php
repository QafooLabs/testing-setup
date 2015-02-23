<?php

namespace Qafoo;

class BasketItemTest extends \PHPUnit_Framework_TestCase
{
    public function testAllowsPositiveCountOnConstructuion()
    {
        $basketItem = new BasketItem($this->productDummy(), 1);

        $this->assertEquals(1, $basketItem->getCount());
    }

    public function testDisallowsNegativeCountOnConstruction()
    {
        $this->setExpectedException('InvalidArgumentException');

        $basketItem = new BasketItem($this->productDummy(), -1);
    }

    public function testDisallowsNegativeAdding()
    {
        $basketItem = new BasketItem($this->productDummy(), 23);

        $this->setExpectedException('InvalidArgumentException');

        $basketItem->addAmount(-1);
    }

    private function productDummy()
    {
        return $this->getMockBuilder('Qafoo\\Product')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
