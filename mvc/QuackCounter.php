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
        //var_dump($count);
       //self::$numberOfQuacks=$count;
    }

    public static function getQuacks():int
    {
        return self::$numberOfQuacks;
    }

}