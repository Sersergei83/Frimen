<?php
//Резиновая утка

class RubberDuck implements Quackable
{
    public function quack(): void
    {
        print "Squeak\n";
    }
}