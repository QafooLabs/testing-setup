<?php

use Behat\MinkExtension\Context\MinkContext,
    Behat\Behat\Exception\PendingException;

require_once __DIR__ . '/../../../src/main/bootstrap.php';

class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
//        $this->useContext('messenger', new MessengerContext($parameters));
        $this->useContext('example', new ExampleContext($parameters));
    }
}
