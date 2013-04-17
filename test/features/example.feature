Feature: Dummy DateTime example

    Scenario: End of month
        Given It is the "01.02.2013"
         When I proceed to the end of the month
         Then It results in the "28.02.2013"
