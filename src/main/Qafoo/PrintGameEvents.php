<?php

namespace Qafoo;

class PrintGameEvents implements GameEvents
{
    public function playerWentToPenaltyBox($player)
    {
        echoln($player . " was sent to the penalty box");
    }

    public function playerCameOutOfPenaltyBox($player)
    {
        echoln($player . " is getting out of the penalty box");
    }

    public function playerStaysInPenaltyBox($player)
    {
        echoln($player . " is not getting out of the penalty box");
    }

    public function playerJoinedGame($player, $playerCount)
    {
        echoln($player . " was added");
        echoln("They are player number " . $playerCount);
    }

    public function playerIsOnTurn($player)
    {
        echoln($player . " is the current player");
    }

    public function playerRoledDie($player, $die)
    {
        echoln("They have rolled a " . $die);
    }
}
