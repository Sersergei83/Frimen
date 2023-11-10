<?php


class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior=new FlyNoWay();
        $this->quackBehavor=new Quack();
    }
    public function Display()
    {
        // TODO: Implement Display() method.
        print_r("Я модельная утка");
    }
}