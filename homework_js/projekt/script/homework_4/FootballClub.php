<?php


class FootballClub extends SportClub
{
    private $strip_colour;
    private $wins;
    private $draws;
    private $defeats;
    private $goals_received;
    private $goals_scored;
    private $number_of_points;


    public function __construct($club_name, $year_of_establishment, $strip_colour, $wins, $draws, $defeats, $goals_received, $goals_scored, $number_of_points)
    {
        parent::__construct($club_name, $year_of_establishment);
        $this->strip_colour = $strip_colour;
        $this->wins = $wins;
        $this->draws = $draws;
        $this->defeats = $defeats;
        $this->goals_received = $goals_received;
        $this->goals_scored = $goals_scored;
        $this->number_of_points = $number_of_points;

    }

    /**
     * @return mixed
     */
    public function getStripColour()
    {
        return $this->strip_colour;
    }

    /**
     * @return mixed
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @return mixed
     */
    public function getDraws()
    {
        return $this->draws;
    }

    /**
     * @return mixed
     */
    public function getDefeats()
    {
        return $this->defeats;
    }

    /**
     * @return mixed
     */
    public function getGoalsReceived()
    {
        return $this->goals_received;
    }

    /**
     * @return mixed
     */
    public function getGoalsScored()
    {
        return $this->goals_scored;
    }

    /**
     * @param mixed $strip_colour
     */
    public function setStripColour($strip_colour)
    {
        $this->strip_colour = $strip_colour;
    }

    /**
     * @param mixed $wins
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    }

    /**
     * @param string $club_name
     */
    public function setClubName(string $club_name)
    {
        $this->club_name = $club_name;
    }

    /**
     * @param string $club_name
     */


    /**
     * @return mixed
     */
    public function getNumberOfPoints()
    {
        return $this->number_of_points;
    }
    public function AnnounceGame()
    {
       return "Welcome to the stadium!";
    }

}