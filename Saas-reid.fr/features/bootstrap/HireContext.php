<?php

namespace App\Features;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class HireContext implements Context
{
    /**
     * @Then /^the job offer is archived$/
     */
    public function theJobOfferIsArchived()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I want to hire a job seeker that applied for our job offer$/
     */
    public function iWantToHireAJobSeekerThatAppliedForOurJobOffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I hire him$/
     */
    public function iHireHim()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
