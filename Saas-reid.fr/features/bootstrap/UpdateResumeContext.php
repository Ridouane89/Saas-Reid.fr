<?php

namespace App\Features;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class UpdateResumeContext implements Context
{
    /**
     * @Then /^I will have a better visibility with recruiters$/
     */
    public function iWillHaveABetterVisibilityWithRecruiters()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I need to update my resume$/
     */
    public function iNeedToUpdateMyResume()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I fill my resume$/
     */
    public function iFillMyResume()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
