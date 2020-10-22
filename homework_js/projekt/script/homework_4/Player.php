<?php


class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;
    /**
     * @var string
     */
    private $position;
    /**
     * @var int
     */
    private $price;

    /**
     * Player constructor.
     * @param string $name
     * @param int $age
     * @param string $position
     * @param int $price
     */
    public function __construct($name, $age, $position, $price)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setPosition($position);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    private function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    private function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    private function setPrice($price)
    {
        $this->price = $price;
    }

}