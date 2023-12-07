<?php


class QuackCounter implements Quackable
{
    private Quackable $duck;
    static int $numberOfQuacks=0;

    public function __construct(Quackable $duck)
    {
        $this->duck=$duck;
    }
    public function quack(): void
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    public static function getQuacks():int
    {
        return self::$numberOfQuacks;
    }
    public function registerObserver(Observer $observer): void
    {
        $this->duck->registerObserver($observer);
    }
    public function notifyObservers(): void
    {
        $this->duck->notifyObservers();
    }

}