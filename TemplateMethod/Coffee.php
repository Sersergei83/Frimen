<?php


class Coffee extends CaffeineBeverage
{


    public function brew():void
    {
        print "Заварить кофе в горячей воде \n";
    }


    public function addCondiments():void
    {
        print "Добавить сахар и молоко \n";
    }

}