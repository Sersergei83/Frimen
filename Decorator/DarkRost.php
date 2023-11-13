<?php


class DarkRost extends Beverage
{
    public function __construct()
    {
        $this->description="Темная обжарка";
    }
    public function cost():float
    {
        return 0.99;
    }
}