<?php


class MallarDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavor= new Quack();
        $this->flyBehavior=new FlyWithWings();
    }
    public function Display()
    {
        // TODO: Implement Display() method.
        print_r("Я утка Крявка ");
    }
}