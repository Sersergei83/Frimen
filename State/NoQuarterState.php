<?php


class NoQuarterState implements State
{
    public GumballMachine $guumballMachine;
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->guumballMachine=$gumballMachine;
    }
    public function insertQuarter():void
    {
        // TODO: Implement insertQuarter() method.
        print "Вы бросили монетку \n";
        $this->guumballMachine->setState($this->guumballMachine->getHasQuarterState());

    }
    public function ejectQuarter():void
    {
        // TODO: Implement ejectQuarter() method.
        print "Вы не бросили монетку \n";
    }
    public function turnCrank():void
    {
        // TODO: Implement turnCrank() method.
        print "Нет монетки — нет шарика. \n";
    }
    public function dispense():void
    {
        // TODO: Implement dispense() method.
        print "Сначала нужно заплатить \n";
    }
    public function __toString()
    {
        return "NoQuarterState";
    }
}