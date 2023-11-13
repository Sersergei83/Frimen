<?php


class Mocha extends CondimentDecorator
{
public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage=$beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription().", Мокко";
    }
    public function cost():float
    {
        return 0.2+$this->beverage->cost();
    }
}