<?php


/**
 * Class Finance
 */
class Finance implements ITransfer
{

    /**
     * @var integer
     */
    private $budget;

    /**
     * Finance constructor.
     * @param $budget
     */
    public function __construct(int $budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param mixed $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

public function byePlayer(){

    $player = PlayerFactory::create('Suares', 30,'forward',20000000);

    return $this->getBudget()-$player->getPrice();
}
public function sellPlayer()
{
    $budget =$this->getBudget();
    $player = PlayerFactory::create('Messi', 32,'forward',80000000);
    $player_price=$player->getPrice();
    return $budget+$player_price;
}

}
