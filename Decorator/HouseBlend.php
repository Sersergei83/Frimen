<?php


class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description="Домашняя смесь";
    }
    public function cost():float
    {
        return 0.89;
    }
}