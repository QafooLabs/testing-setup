<?php

namespace Qafoo;

class TicTacToe
{
    const PLAYER_X = 'X';
    const PLAYER_O = 'O';

    private $board;

    public function __construct()
    {
        $this->board  = [
            0 => ['A' => null, 'B' => null, 'C' => null],
            1 => ['A' => null, 'B' => null, 'C' => null],
            2 => ['A' => null, 'B' => null, 'C' => null],
        ];
    }

    public function getRowNames()
    {
        return array_keys($this->board);
    }

    public function getColumnNames()
    {
        return array_keys($this->board[0]);
    }

    public function isFinished(): bool
    {
        foreach ($this->board as $row) {
            foreach ($row as $cell) {
                if ($cell === null) {
                    return false;
                }
            }
        }
        return true;
    }

    public function occupy($player, $row, $column)
    {
        if (!array_key_exists($row, $this->board)) {
            throw new \OutOfBoundsException('Row index out of bounds.');
        }
        if (!array_key_exists($column, $this->board[$row])) {
            throw new \OutOfBoundsException('Column index out of bounds.');
        }

        if ($this->board[$row][$column] !== null) {
            throw new \LogicException('Cannot occupy a cell twice!');
        }

        $this->board[$row][$column] = $player;
    }

    public function countOccupiedCells()
    {
        $occupiedCellCount = 0;
        foreach ($this->board as $row) {
            foreach ($row as $cell) {
                if ($cell !== null) {
                    $occupiedCellCount++;
                }
            }
        }
        return $occupiedCellCount;
    }
}
