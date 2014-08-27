<?php

namespace Qafoo;

class Checkout
{
    private $sum = 0;

    private $display;

    public function __construct(Display $display, PriceRepository $priceRepository)
    {
        $this->display = $display;
        $this->priceRepository = $priceRepository;
    }

    public function scan($item)
    {
        $this->sum += $this->priceRepository->getPrice($item);
        $this->display->display($this->getSum());
    }

    public function getSum()
    {
        return $this->sum;
    }
}
