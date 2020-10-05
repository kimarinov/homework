<?php


abstract class SportClub
{
    /**
     * @var string;
     */
    protected $club_name;
    private $year_of_establishment;

    /**
     * SportClub constructor.
     * @param string $club_name
     * @param $year_of_establishment
     */
    public function __construct($club_name, $year_of_establishment)
    {
        $this->club_name = $club_name;
        $this->year_of_establishment = $year_of_establishment;
    }

    /**
     * @return string
     */
    public function getClubName()
    {
        return $this->club_name;
    }

    /**
     * @return mixed
     */
    public function getYearOfEstablishment()
    {
        return $this->year_of_establishment;
    }
    abstract public function AnnounceGame();

}
