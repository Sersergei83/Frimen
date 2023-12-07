<?php


abstract class AbstractDuckFactory
{
    public abstract function createMallardDuck():Quackable;
    public abstract function createRedheadDuck():Quackable;
    public abstract function createDuckCall():Quackable;
    public abstract function createRubberDuck():Quackable;
}