<?php


class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavor=new Squeak();
        $this->flyBehavior=new FlyNoWay();
    }
    public function Display()
    {
        // TODO: Implement Display() method.
        print_r("Я резиновая утка");
    }

}