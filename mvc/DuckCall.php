<?php

//утиній манок
class DuckCall implements Quackable
{
    public function quack(): void
    {
        print "Kwak\n";
    }
}