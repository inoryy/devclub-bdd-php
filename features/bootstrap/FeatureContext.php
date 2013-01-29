<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\Behat\Context\Step\Then;

use Behat\MinkExtension\Context\MinkContext;

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    protected $app;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->app = new AppKernel();
    }

    /**
     * @Given /^there are no car entries in the database$/
     */
    public function thereAreNoCarEntriesInTheDatabase()
    {
        $this->app['db']->executeUpdate('DELETE FROM cars WHERE 1 = 1');
    }

    /**
     * @Then /^I should see "([^"]*)" in results table$/
     */
    public function iShouldSeeInResultsTable($text)
    {
        return new Then(sprintf('I should see "%s" in the "#search_results table td.name" element', $text));
    }
}
