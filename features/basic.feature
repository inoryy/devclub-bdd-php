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

  Scenario: Devclub visitors should not see code errors
    Given I am on "http://devclub.eu"
    Then I should not see "Warning:"
      And I should not see "Notice:"

  Scenario: Navigate around on devclub
    Given I am on "http://devclub.eu"
    When I follow "Анонс январской встречи: 30.01.2013"
    Then I should see "BDD на PHP с помощью Behat + Mink."
      And I follow "Роман Маринченко"
      Then I should be on "https://github.com/Inori"