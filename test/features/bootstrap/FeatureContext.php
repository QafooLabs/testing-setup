<?php

use Behat\MinkExtension\Context\MinkContext,
    Behat\Behat\Exception\PendingException;

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
        $this->useContext('example', new ExampleContext($parameters));
        $this->useContext('wikipedia', new WikipediaContext($parameters));
        $this->useContext('javascript', new JavaScriptContext($parameters));
    }
}
