<?php

namespace Qafoo;

use Behat\Mink\Driver;
use Behat\Mink\Session;

class FunctionalTest extends \PHPUnit_Framework_TestCase
{
    protected $session;

    public function setup()
    {
        $driver = new Driver\GoutteDriver();

        $this->session = new Session($driver);
        $this->session->start();
    }

    public function testWikipediaIsOnline()
    {
        $this->session->visit('https://de.wikipedia.org/wiki/Wikipedia:Hauptseite');

        $page = $this->session->getPage();

        $firstHeading = $page->find('css', '#firstHeading');
        $this->assertContains(
            'Wikipedia:Hauptseite',
            $firstHeading->getText()
        );
    }
}
