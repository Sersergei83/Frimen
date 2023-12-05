<?php


class GumballMachine
{
private State $soldOutState;
private State $noQuarterState;
private State $hasQuarterState;
private State $soldState;
private State $state;
public int $count=0;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState=new SoldOutState($this);
        $this->noQuarterState=new NoQuarterState($this);
        $this->hasQuarterState=new HasQuarterState($this);
        $this->soldState=new SoldState($this);
        $this->count=$numberGumballs;
        if ($numberGumballs>0)
        {
            $this->state=$this->noQuarterState;
        }
        else
        {
            $this->state=$this->soldState;
        }
}
public function insertQuarter():void
{
    $this->state->insertQuarter();
}

    public function ejectQuarter():void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank():void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }
/*Этот метод позволяет другим объектам
(в частности, нашим объектам State)
перевести автомат в другое состояние
*/
    public function setState(State $state):void
    {
        $this->state=$state;
    }
    public function releaseBall():void
    {
        print "Из щели выкатывается жвачка...";
        if ($this->count != 0)
        {
            $this->count=$this->count-1;
        }
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return NoQuarterState|State
     */
    public function getNoQuarterState(): NoQuarterState|State
    {
        return $this->noQuarterState;
    }

    /**
     * @return HasQuarterState|State
     */
    public function getHasQuarterState(): HasQuarterState|State
    {
        return $this->hasQuarterState;
    }

    /**
     * @return SoldOutState|State
     */
    public function getSoldOutState(): SoldOutState|State
    {
        return $this->soldOutState;
    }

    /**
     * @return SoldState|State
     */
    public function getSoldState(): SoldState|State
    {
        return $this->soldState;
    }

    /**
     * @return NoQuarterState|SoldState|State
     */
    public function getState(): NoQuarterState|SoldState|State
    {
        return $this->state;
    }

}