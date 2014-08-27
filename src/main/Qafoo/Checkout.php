<?php

namespace Qafoo;

class Checkout
{
    private $prices = array(
        'A' => 23.42,
        'B' => 10.00,
    );

    private $sum = 0;

    public function scan($item)
    {
        $this->sum += $this->prices[$item];
    }

    public function getSum()
    {
        return $this->sum;
    }
}
