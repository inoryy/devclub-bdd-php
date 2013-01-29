Feature: Search bar
  In order to speed up website usage
  As a website visitor
  I need a search system

Scenario: No results for "mustang" search
  Given there are no car entries in the database
    And I am on homepage
  When I fill in "Car Name" with "mustang"
    And I press "Search"
  Then I should see "Sorry, no cars found"

@javascript
Scenario: Search results for "mustang"
  Given there are no car entries in the database
    And there is "Ford Mustang GT500" car entry in the database
    And I am on homepage
  When I fill in "Car Name" with "mustang"
    And I press "Search"
    And I wait for search results to appear
  Then I should see "Ford Mustang GT500" in results table