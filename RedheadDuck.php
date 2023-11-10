<?php


class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior=new FlyWithWings();
        $this->quackBehavor=new Quack();
    }
    public function Display()
    {
        // TODO: Implement Display() method.
        print_r("Я ріжая утка");
    }
}