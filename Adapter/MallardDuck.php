<?php


class MallardDuck implements Duck
{
    public function quack(): void
    {
        print("Кря Кря \n");
    }
    public function fly(): void
    {
        print("Я летаю \n");
    }
}