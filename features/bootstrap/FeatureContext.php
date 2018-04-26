<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

//use PHPUnit\Framework\Assert as PHPUnitAssert;
use ConcretePhpAssert\ConcreteAssert;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Given this package is installed
     */
    public function thisPackageIsInstalled()
    {
        class_exists('\ConcretePhpAssert\ConcreteAssert');
    }

    /**
     * @When I instantiate the class
     */
    public function iInstantiateTheClass()
    {
        $this->assertionLibrary = new ConcreteAssert();
    }

    /**
     * @Then I can invoke an assertion method without causing errors.
     */
    public function iCanInvokeAnAssertionMethodWithoutCausingErrors()
    {
        $this->assertionLibrary->assertTrue(TRUE);
    }
}
