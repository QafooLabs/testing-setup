<?php

namespace Qafoo;

class TicTacToeTest extends \PHPUnit\Framework\TestCase
{
    private $ticTacToe;

    public function setUp()
    {
        $this->ticTacToe = new TicTacToe();
    }

    public function testInitialBoardIsEmpty()
    {
        $this->ticTacToe = new TicTacToe();

        $this->assertEquals(0, $this->ticTacToe->countOccupiedCells());
    }

    public function testACellCanBeOccupied()
    {
        $this->ticTacToe = new TicTacToe();

        $this->ticTacToe->occupy(TicTacToe::PLAYER_O, 1, 'A');

        $this->assertEquals(1, $this->ticTacToe->countOccupiedCells());
    }

    public function testPlayerCannotOccupyCellOutsideTheBoard()
    {
        $this->ticTacToe = new TicTacToe();

        $this->expectException(\OutOfBoundsException::class);

        $this->ticTacToe->occupy(TicTacToe::PLAYER_O, 5, 'A');
        // Exception thrown, all fine
    }

    public function testPlayerCannotOccupyACellThatIsAlreadyOccupied()
    {
        $this->ticTacToe = new TicTacToe();
        $this->ticTacToe->occupy(TicTacToe::PLAYER_O, 2, 'B');

        $this->expectException(\LogicException::class);

        $this->ticTacToe->occupy(TicTacToe::PLAYER_O, 2, 'B');
        // Exception thrown, all fine
    }
}
