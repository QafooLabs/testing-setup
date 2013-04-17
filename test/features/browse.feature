Feature: Browse shop

    Scenario: Search front page
        Given I am on "/"
         When I fill in "searchInput" with "Kore"
          And I press "searchButton"
         Then I should see "Kore may refer to:"

    Scenario: Follow redirect link
        Given I am on "/"
         When I fill in "searchInput" with "Kore"
          And I press "searchButton"
          And I follow "Kore (energy drink)"
         Then the response status code should be 200
