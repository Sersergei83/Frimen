<?php


class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck(): Quackable
    {
        return new QuackCounter(new MallardDuck());
    }
    public function createDuckCall(): Quackable
    {
        return new QuackCounter(new DuckCall());
    }
    public function createRedheadDuck(): Quackable
    {
        return new QuackCounter(new RedheadDuck());
    }
    public function createRubberDuck(): Quackable
    {
        return new QuackCounter(new RubberDuck());
    }

}