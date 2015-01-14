<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

class JavaScriptContext extends BehatContext
{
    /**
     * @Given /^I wait for the autocomplete to appear$/
     */
    public function iWaitForTheAutocompleteToAppear()
    {
        $this->getSession()->wait(
            5000,
            "$('div.suggestion-results > a').length > 0"
        );
    }

    private function getSession()
    {
        return $this->getMainContext()->getSession();
    }
}
