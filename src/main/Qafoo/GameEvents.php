<?php

namespace Qafoo;

interface GameEvents
{
    public function playerWentToPenaltyBox($player);

    public function playerCameOutOfPenaltyBox($player);

    public function playerJoinedGame($player, $playerCount);

    public function playerRoledDie($player, $die);

    public function playerIsOnTurn($player);
}
