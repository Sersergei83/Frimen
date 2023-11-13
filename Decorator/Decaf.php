<?php


class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description="Без кофеина";
    }
    public function cost():float
    {
        return 1.05;
    }
}