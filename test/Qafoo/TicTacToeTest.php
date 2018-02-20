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

    public function testPlayerCannotOccupyCellOutsideTheBoard()
    {
        $ticTacToe = new TicTacToe();

        $this->expectException(\OutOfBoundsException::class);

        $ticTacToe->occupy(TicTacToe::PLAYER_O, 5, 'A');
        // Exception thrown, all fine
    }

    public function testPlayerCannotOccupyACellThatIsAlreadyOccupied()
    {
        $ticTacToe = new TicTacToe();


        $ticTacToe->occupy(TicTacToe::PLAYER_O, 2, 'B');

        $this->expectException(\LogicException::class);

        $ticTacToe->occupy(TicTacToe::PLAYER_O, 2, 'B');
        // Exception thrown, all fine
    }
}
