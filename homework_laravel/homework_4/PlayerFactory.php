<?php


class PlayerFactory
{
    public static function create($name, $age,$position,$price)
    {
        return new Player($name, $age,$position,$price);
    }
}