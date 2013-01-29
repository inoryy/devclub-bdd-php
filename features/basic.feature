Feature: Basic examples
  In order to show basic Behat functionality
  As devclub speaker
  I need to be able to run very basic tests

  Scenario: See welcome text on homepage
    Given I am on homepage
    Then I should see "Hello Devclub!"

  Scenario: Check that google.com shows regional results, then go to non-regional page
    Given I am on "http://google.com/"
    Then I should not see "Google Search"
      And I should see "Google otsing"
      And I go to "http://google.com/ncr"
      Then I should see "Google Search"