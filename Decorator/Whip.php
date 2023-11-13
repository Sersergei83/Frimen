<?php


class Whip extends CondimentDecorator
{
public  Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage=$beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription().", Взбитіе сливки";
    }
    public function cost():float
    {
        return 0.1+$this->beverage->cost();
    }
}