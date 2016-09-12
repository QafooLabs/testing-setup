<?php

use Behat\Behat\Context\Context,
    Behat\Behat\Exception\PendingException,
    Behat\Behat\Definition\Call,
    Behat\MinkExtension\Context\MinkContext;

class WikipediaContext extends MinkContext
{
    /**
     * @Given /^I am on the frontpage$/
     */
    public function iAmOnTheFrontpage()
    {
        $this->iAmOnHomepage();
    }

    /**
     * @When /^I search for "([^"]*)"$/
     */
    public function iSearchFor($searchTerm)
    {
        $this->fillField('searchInput', $searchTerm);
        $this->pressButton('searchButton');
    }

    /**
     * @Then /^the page should exist$/
     */
    public function thePageShouldExist()
    {
        $this->assertPageContainsText('GNC (store)');
    }
}
