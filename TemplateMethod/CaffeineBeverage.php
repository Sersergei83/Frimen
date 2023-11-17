<?php


abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();

    }
    abstract public function brew():void;
    abstract public function addCondiments():void;

    public function boilWater()
    {
        print "Вскипятить воду \n";
    }

    public function pourInCup()
    {
        print "Перелить в чашку \n";
    }


}