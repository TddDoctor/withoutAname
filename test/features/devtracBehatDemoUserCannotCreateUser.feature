@javascript
Feature: Devtrac Site Behat Demo User Test
  In order for the demo user to login, you must be on the login page
  Background: In order to login, the demo user must be on the login page. We want to test if the demo user can create a user. This test should fail
 
  @api
  Scenario: Devtrac Demo User Login Test
    Given I am on "/"
    When i go to "/user"
    And I fill in "name" with "user_demo"
    And I fill in "pass" with "user_demo"
    And I press the "Log in" button
    Then I should not see "/user/me"
  
  @api 
  Scenario: Devtrac check if form for creating new user exists
    Given I am logged in as a user with the 7 role
    And I am on "/admin/people/create"
    Then I should see "Access denied"
    
