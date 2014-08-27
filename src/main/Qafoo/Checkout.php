<?php

namespace Qafoo;

class Checkout
{
    private $prices = array(
        'A' => 23.42,
        'B' => 10.00,
    );

    private $sum = 0;

    private $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    public function scan($item)
    {
        $this->sum += $this->prices[$item];
        $this->display->display($this->getSum());
    }

    public function getSum()
    {
        return $this->sum;
    }
}
