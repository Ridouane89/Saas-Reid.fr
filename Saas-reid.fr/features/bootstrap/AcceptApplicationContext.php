<?php

namespace App\Features;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class AcceptApplicationContext implements Context
{
    /**
     * @When /^I send a new message to explain the next step$/
     */
    public function iSendANewMessageToExplainTheNextStep()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^the job seeker is aware of our decision and we can maybe meet the job seeker$/
     */
    public function theJobSeekerIsAwareOfOurDecisionAndWeCanMaybeMeetTheJobSeeker()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I want to accept an application$/
     */
    public function iWantToAcceptAnApplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
