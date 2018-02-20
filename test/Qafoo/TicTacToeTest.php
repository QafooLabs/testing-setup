<?php

namespace Qafoo;

class TicTacToeTest
{
    public function testInitialBoardIsEmpty()
    {
        $ticTacToe = new TicTacToe();

        $this->assertEquals(0, $ticTacToe->countOccupiedCells());
    }
}
