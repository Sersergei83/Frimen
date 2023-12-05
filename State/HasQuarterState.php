<?php


class HasQuarterState implements State
{
    protected int $randomWinner;
    protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }

    public function insertQuarter() :void
    {
        // TODO: Implement insertQuarter() method.
        print "Вы не можете вставить еще одну четверть \n";
    }
    public function ejectQuarter():void
    {
        // TODO: Implement ejectQuarter() method.
        print "Вернуть монетку\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
    public function turnCrank():void
    {
        // TODO: Implement turnCrank() method.
        print "Ты обратился...";
        $winner=mt_rand(0,9);
        if ($winner==0 && ($this->gumballMachine->getCount()>1))
        {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        }
        else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }
    public function dispense():void
    {
        // TODO: Implement dispense() method.
        print "Жевательная резинка не выдана \n";
    }
    public function __toString()
    {
        return "HasQuarterState";
    }
}