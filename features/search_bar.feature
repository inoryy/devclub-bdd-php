Feature: Search bar
  In order to speed up website usage
  As a website visitor
  I need a search system

Scenario: Search results for "mustang"
  Given I am on homepage
  When I fill in "Car Name" with "mustang"
    And I press "Search"
  Then I should see "Ford Mustang GT500" in results table