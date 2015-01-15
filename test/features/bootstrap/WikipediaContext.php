<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException,
    Behat\Behat\Context\Step;

class WikipediaContext extends BehatContext
{
    /**
     * @Given /^I am on the frontpage$/
     */
    public function iAmOnTheFrontpage()
    {
        return array(
            new Step\Given('I am on "/"'),
        );
    }

    /**
     * @When /^I search for "([^"]*)"$/
     */
    public function iSearchFor($searchTerm)
    {
        return array(
            new Step\When('I fill in "searchInput" with "' . $searchTerm . '"'),
            new Step\When('I press "searchButton"'),
        );
    }

    /**
     * @Then /^the page should exist$/
     */
    public function thePageShouldExist()
    {
        return array(
            new Step\Then('I should see "GNC (store)"'),
        );
    }
}
