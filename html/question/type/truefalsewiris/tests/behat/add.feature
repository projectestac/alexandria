@qtype @qtype_wq @qtype_truefalsewiris
Feature: A teacher creaters true false random
  As a teacher
  In order to test my students
  I need to be able to create a True/False Wiris question

  Background:
    Given the following "users" exist:
      | username |
      | teacher  |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user    | course | role           |
      | teacher | C1     | editingteacher |

  @javascript
  Scenario: Create a True/False Wiris question
    When I am on the "Course 1" "core_question > course question bank" page logged in as teacher
    And I press "Create a new question ..."
    And I choose the question type "True/False - science"
    Then I should see "Adding a true/false - math & science question by WIRIS"
    Then I set the following fields to these values:
      | Question name | true-false-wiris-001                |
      | Question text | This is a Wiris True/False question |
    And I open Wiris Quizzes Studio
    And I click on "Random variables" "text"
    And I add the variable "a" with value "10"
    And I add the variable "b" with value "x^2 + 1"
    And I add the variable "r" with value "true"
    And I go back in Wiris Quizzes Studio
    And I save Wiris Quizzes Studio
    Then I set the following fields to these values:
      | Correct answer variable | #r |
    And I press "id_submitbutton"
    Then I should see "true-false-wiris-001"
