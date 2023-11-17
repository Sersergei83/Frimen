<?php


class tea extends CaffeineBeverage
{

    public function brew():void
    {
        print "Заварить чай в горячей воде \n";
    }

    public function addCondiments():void
    {
        print "Добавить лимон \n";
    }


}