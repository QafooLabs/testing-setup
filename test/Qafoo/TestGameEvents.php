<?php

namespace Qafoo;

class TestGameEvents implements GameEvents
{
    const PENALTY_IN = 'in';

    const PENALTY_OUT = 'out';

    const PENALTY_STAY = 'stay';

    public $penaltyEvents = array();

    public function playerWentToPenaltyBox($player)
    {
        $this->penaltyEvents[] = array(self::PENALTY_IN, $player);
    }

    public function playerCameOutOfPenaltyBox($player)
    {
        $this->penaltyEvents[] = array(self::PENALTY_OUT, $player);
    }

    public function playerStaysInPenaltyBox($player)
    {
        $this->penaltyEvents[] = array(self::PENALTY_STAY, $player);
    }

    public function playerJoinedGame($player, $playerCount)
    {
    }

    public function playerIsOnTurn($player)
    {
    }

    public function playerRoledDie($player, $die)
    {
    }
}
