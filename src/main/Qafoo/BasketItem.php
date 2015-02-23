<?php

namespace Qafoo;

class BasketItem
{
    /**
     * @var \Qafoo\Product
     */
    private $product;

    /**
     * @var int
     */
    private $count;

    /**
     * @param \Qafoo\Product $product
     * @param int $count
     */
    public function __construct(Product $product, $count = 1)
    {
        $this->assertAmountNotNegative($count);

        $this->product = $product;
        $this->count = $count;
    }

    /**
     * @param int $count
     */
    public function addAmount($count)
    {
        $this->assertAmountNotNegative($count);

        $this->count += $count;
    }

    /**
     * @param int $count
     */
    public function removeAmount($count)
    {
        $this->assertAmountNotNegative($count);

        if ($this->count - $count < 1) {
            throw new \InvalidArgumentException('Item count should not go below 1');
        }

        $this->count -= $count;
    }

    /**
     * @param int $amount
     */
    private function assertAmountNotNegative($amount)
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException('Amount must be positive');
        }
    }

    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return \Qafoo\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
