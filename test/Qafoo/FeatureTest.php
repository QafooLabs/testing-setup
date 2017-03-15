<?php

namespace Qafoo;

use Behat\Mink\Driver;
use Behat\Mink\Session;
use Behat\SahiClient;

abstract class FeatureTest extends IntegrationTest
{
    protected $session;

    public function start()
    {
        switch (strtolower(getenv('DRIVER'))) {
            case 'sahi':
                $browser = getenv('BROWSER') ?: 'firefox';
                $driver = new Driver\SahiDriver(
                    $browser,
                    new SahiClient\Client(
                        new SahiClient\Connection(null, 'localhost', 9999)
                    )
                );
                break;

            case 'goutte':
            default:
                $driver = new Driver\GoutteDriver();
        }

        $this->session = new Session($driver);
        $this->session->start();
    }

    public function stop()
    {
        if ($this->session) {
            $this->session->stop();
            $this->session = null;
        }
    }

    public function tearDown()
    {
        if (!$this->hasFailed()) {
            $this->stop();
        }
    }

    /**
     * Visit given path
     *
     * @param string $path
     * @return \Behat\Mink\Element\DocumentElement
     */
    protected function visit($path)
    {
        if (!$this->session) {
            $this->start();
        }

        $domain = getenv('DOMAIN') ?: 'http://cron.schlitt.info';
        $this->session->visit($domain . $path);
        return $this->session->getPage();
    }

    /**
     * Find element using CSS selector
     *
     * @param string $cssSelector
     * @return \Behat\Mink\Element\NodeElement
     */
    protected function find($cssSelector)
    {
        $result = $this->session->getPage()->find('css', $cssSelector);
        $this->assertNotNull($result, "Did not find any elements matching $cssSelector");

        return $result;
    }
}
