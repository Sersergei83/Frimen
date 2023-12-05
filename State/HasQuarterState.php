<?php


class HasQuarterState implements State
{
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
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }
    public function dispense()
    {
        // TODO: Implement dispense() method.
        print "Жевательная резинка не выдана \n";
    }
}