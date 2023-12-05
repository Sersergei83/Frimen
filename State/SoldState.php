<?php


class SoldState implements State
{
protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }
    public function insertQuarter():void
    {
        // TODO: Implement insertQuarter() method.
        print "Пожалуйста, подождите, мы уже дарим вам жевательную резинку \n";
    }
    public function ejectQuarter(): void
    {
        // TODO: Implement ejectQuarter() method.
        print "Извините, вы уже повернули рукоятку\n";
    }
    public function turnCrank(): void
    {
        // TODO: Implement turnCrank() method.
        print "Дважды повернувшись, вы не получите еще одну жвачку!\n";
    }
    public function dispense(): void
    {
        // TODO: Implement dispense() method.
        $this->gumballMachine->releaseBall();
        if($this->gumballMachine->getCount()>0)
        {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        }
        else
        {
            print "Ой, кончились жевательные конфеты!";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

}