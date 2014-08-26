<?php

namespace Qafoo;

class GameTest extends \PHPUnit_Framework_TestCase
{
    public function testGameRun()
    {
        $game = new Game();

        $this->expectOutputRegex('(They are player number 2)');

        $game->add('Paul');
        $game->add('Eric');

        for ($i = 0; $i < 5; $i++) {
            $paulIsNotWinner = $game->wasCorrectlyAnswered();
            $ericIsNotWinner = $game->wrongAnswer();

            $this->assertTrue($paulIsNotWinner);
            $this->assertTrue($ericIsNotWinner);
        }

        $paulIsNotWinner = $game->wasCorrectlyAnswered();
        $ericIsNotWinner = $game->wrongAnswer();

        // Paul has 6 gold coins
        $this->assertFalse($paulNotWinner);
        $this->assertTrue($ericIsNotWinner);
    }

    /**
     * @param int $role
     * @param string $expectedCategory
     * @dataProvider provideRoleCategorySets
     */
    public function testPlaceCategories($role, $expectedCategory)
    {
        $game  = new Game();

        $game->add('Paul');
        $game->add('Eric');

        $this->expectOutputRegex('(The category is ' . $expectedCategory . ')');

        $game->roll(3);
    }

    public static function provideRoleCategorySets()
    {
        return array(
            array('0', 'Rock'),
            array('4', 'Rock'),
            array('8', 'Rock'),
        );
    }
}
