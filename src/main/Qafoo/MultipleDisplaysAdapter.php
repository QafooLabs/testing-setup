<?php

namespace Qafoo;

class MultipleDisplaysAdapter implements Display
{
    /**
     * @var \Qafoo\Display[]
     */
    private $displays = array();

    /**
     * @param \Qafoo\Display[] $displays
     */
    public function __construct(array $displays)
    {
        foreach ($displays as $display) {
            $this->addDisplay($display);
        }
    }

    public function addDisplay(Display $display)
    {
        $this->displays[] = $display;
    }

    /**
     * @param float $float
     */
    public function display($float)
    {
        foreach ($this->displays as $display) {
            $display->display($float);
        }
    }
}
