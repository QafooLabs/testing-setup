<?php

namespace Qafoo;

class TicTacToeTest extends \PHPUnit\Framework\TestCase
{
    public function testInitialBoardIsEmpty()
    {
        $ticTacToe = new TicTacToe();

        $this->assertEquals(0, $ticTacToe->countOccupiedCells());
    }

    public function testACellCanBeOccupied()
    {
        $ticTacToe = new TicTacToe();

        $ticTacToe->occupy(TicTacToe::PLAYER_O, 1, 'A');

        $this->assertEquals(1, $ticTacToe->countOccupiedCells());
    }
}
