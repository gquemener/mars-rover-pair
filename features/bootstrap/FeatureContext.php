<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use MarsRover\Grid;
use MarsRover\MarsRover;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private MarsRover $rover;

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
     * @Given a grid with no obstacles
     */
    public function aGridWithNoObstacles()
    {
        $this->rover = new MarsRover(new Grid());
    }

    /**
     * @When I receive the command :arg1
     */
    public function iReceiveTheCommand($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should be located at :arg1
     */
    public function iShouldBeLocatedAt($arg1)
    {
        throw new PendingException();
    }
}
