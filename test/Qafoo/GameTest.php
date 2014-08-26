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

        $game->roll($role);
    }

    public static function provideRoleCategorySets()
    {
        return array(
            array(0, 'Pop'),
            array(4, 'Pop'),
            array(8, 'Pop'),
            array(1, 'Science'),
            array(5, 'Science'),
            array(9, 'Science'),
            array(2, 'Sports'),
            array(6, 'Sports'),
            array(10, 'Sports'),
            array(3, 'Rock'),
            array(7, 'Rock'),
            array(11, 'Rock'),
        );
    }

    public function testPenaltyBox()
    {
        $game  = new Game();

        $game->add('Paul');
        $game->add('Eric');

        $this->expectOutputRegex('(Paul was sent to the penalty box)');
        $game->wrongAnswer();

        // Eric normal
        $game->wasCorrectlyAnswered();

        $this->expectOutputRegex('(Paul is getting out of the penalty box)');
        $game->roll(3);
    }
}
