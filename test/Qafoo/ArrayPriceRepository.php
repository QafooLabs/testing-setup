<?php

namespace Qafoo;

class ArrayPriceRepository implements PriceRepository
{
    /**
     * @var array
     */
    private $prices;

    /**
     * @param array $prices
     */
    public function __construct(array $prices)
    {
        $this->prices = $prices;
    }

    /**
     * @param string $item
     * @return float
     */
    public function getPrice($item)
    {
        return $this->prices[$item];
    }
}
