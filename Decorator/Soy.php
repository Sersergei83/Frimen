<?php


class Soy extends CondimentDecorator
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
        return $this->beverage->getDescription().", Соя";
    }
    public function cost():float
    {
        return 0.15+$this->beverage->cost();
    }
}