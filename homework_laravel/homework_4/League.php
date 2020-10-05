<?php


class League implements ILeagueManager
{
    private  $number_of_clubs;
    private $league =array();
    public function __construct(int $number_of_clubs){
        $this->number_of_clubs=$number_of_clubs;
        $this->league=new FootballClub();
        diplay_menu();
    }
    private function display_menu(){
        while (true){
            echo "Premier League menu";
            echo "Create new team and add it to league(Press 1)";
            echo "Delete existing team and remove it from league(Press 2)";
        }

    }
    private function addTeam(){
        $club= new FootballClub();
        array_push($league,$club);
        $line =readline();
        $club->setClubName($line);
        if (in_array($club,$league)){
            echo "The club is already in league";
        }
    }
    private function deleteTeam(){
        echo "Insert club name";
        $line =readline();
     //to do foreach to match club name
    }
    private function displayStatistics(){
        echo "Insert the club name";
        $line =readline();
        //to do display statistic
    }
}