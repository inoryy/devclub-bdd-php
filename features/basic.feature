Feature: Basic examples
  In order to show basic Behat functionality
  As devclub speaker
  I need to be able to run very basic tests

  Scenario: See welcome text on homepage
    Given I am on homepage
    Then I should see "Hello Devclub!"