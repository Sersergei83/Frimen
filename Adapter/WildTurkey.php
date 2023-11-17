<?php


class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        print "Gobble gobble \n";
    }
    public function fly(): void
    {
        print "Я летаю на короткие расстояния \n";
    }
}