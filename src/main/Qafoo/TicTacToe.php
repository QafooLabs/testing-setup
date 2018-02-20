<?php

namespace Qafoo;

class TicTacToe
{
    private $board;

    public function __construct()
    {
        $this->board  = [
            0 => ['A' => null, 'B' => null, 'C' => null],
            1 => ['A' => null, 'B' => null, 'C' => null],
            2 => ['A' => null, 'B' => null, 'C' => null],
        ];
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
