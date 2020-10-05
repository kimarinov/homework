<?php


class Stadium
{
    private $name_stadium;
    private $stadium_district;
    private $stadium_capacity;
    private $stadium_address;

    /**
     * Stadium constructor.
     * @param $name_stadium
     * @param $stadium_district
     * @param $stadium_capacity
     * @param $stadium_address
     */
    public function __construct($name_stadium, $stadium_district, $stadium_capacity, $stadium_address)
    {
        $this->name_stadium = $name_stadium;
        $this->stadium_district = $stadium_district;
        $this->stadium_capacity = $stadium_capacity;
        $this->stadium_address = $stadium_address;
    }

    /**
     * @return mixed
     */
    public function getNameStadium()
    {
        return $this->name_stadium;
    }

    /**
     * @return mixed
     */
    public function getStadiumCapacity()
    {
        return $this->stadium_capacity;
    }

}