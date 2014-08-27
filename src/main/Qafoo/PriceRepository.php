<?php

namespace Qafoo;

interface PriceRepository
{
    /**
     * @param string $item
     * @return float
     */
    public function getPrice($item);
}
