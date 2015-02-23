<?php

namespace Qafoo;

class Product
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $price;

    /**
     * @param string $title
     * @param float $price
     */
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
