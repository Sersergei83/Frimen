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
              foreach ($this->quackers as $quacker)
        {
            $quacker->quack();
        }

    }
    public function registerObserver(Observer $observer): void
    {
        foreach ($this->quackers as $quacker)
        {
            $quacker->registerObserver($observer);
        }

    }
    public function notifyObservers(): void
    {
    }
}