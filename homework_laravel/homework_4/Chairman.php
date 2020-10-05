<?php


class Chairman
{
    private $president_name;
    private $president_age;
    private $president_gender;

    /**
     * Chairman constructor.
     * @param $president_name
     * @param $president_age
     * @param $president_gender
     */
    public function __construct($president_name, $president_age, $president_gender)
    {
        $this->president_name = $president_name;
        $this->president_age = $president_age;
        $this->president_gender = $president_gender;
    }
}