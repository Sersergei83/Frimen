<?php


class SoldOutState implements State
{
    protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }
    public function insertQuarter():void  {
print "You cant insert a quarter  the machine is sold out";
}
public function  ejectQuarter():void {
print ("You can’t eject, you haven’t inserted a quarter yet");
}
public function turnCrank():void {
 print("You turned, but there are no gumballs");
}
public function dispense():void {
print ("No gumball dispensed");
}
public function __toString() {
return "sold out";
}

}