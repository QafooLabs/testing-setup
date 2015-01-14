Feature: Browse Wikipedia

    @javascript
    Scenario: Autocomplete dropdown appears
        Given I am on "/"
         When I fill in "searchInput" with "Kore"
          And I wait for the autocomplete to appear
         Then I should see "Korea"
