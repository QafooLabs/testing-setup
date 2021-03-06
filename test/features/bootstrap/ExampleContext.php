<?php

use Behat\Behat\Context\Context,
    Behat\Behat\Exception\PendingException;

class ExampleContext implements Context
{
    protected $date;

    /**
     * @Given /^It is the "([^"]*)"$/
     */
    public function itIsThe($date)
    {
        $this->date = new \DateTime($date);
    }

    /**
     * @When /^I proceed to the end of the month$/
     */
    public function iProceedToTheEndOfTheMonth()
    {
        $this->date->modify("last day of this month");
    }

    /**
     * @Then /^It results in the "(?P<date>[^"]*)"$/
     */
    public function itResultsInThe($date)
    {
        \PHPUnit\Framework\Assert::assertEquals(
            $date,
            $this->date->format("d.m.Y")
        );
    }
}
