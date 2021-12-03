Feature:
    In order to explore mars
    As a mars rover
    I need to be able to move

    Scenario: Successfully move the rover
        Given a grid with no obstacles
        When I receive the command "MMRMMLM"
        Then I should be located at "2:3:N"
