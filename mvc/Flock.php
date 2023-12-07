<?php


class Flock implements Quackable
{
    private array $quackers;

    public function add(Quackable $quackable)
    {
        $this->quackers[]=$quackable;
    }
    public function quack(): void
    {
       // var_dump($this->quackers[0]);
        foreach ($this->quackers as $quacker)
        {
            //var_dump($quacker);
            $quacker->quack();

        }
    }
}