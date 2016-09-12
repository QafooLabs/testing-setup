Feature: Browse Wikipedia

    Scenario: Search front page
        Given I am on the frontpage
         When I search for "Kore"
         Then I should see "Kore may refer to:"

    Scenario: Follow redirect link
        Given I am on the frontpage
         When I search for "Kore"
          And I follow "Kore (energy drink)"
         Then the page should exist
