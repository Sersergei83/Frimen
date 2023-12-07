<?php

//утиній манок
class DuckCall implements Quackable
{
    public Observable $observable;

    public function __construct()
    {
        $this->observable=new Observable($this);

    }

    public function quack(): void
    {
        print "Kwak\n";
        $this->notifyObservers();
    }
    public function registerObserver(Observer $observer): void
    {
        $this->observable->registerObserver($observer);
    }
    public function notifyObservers(): void
    {
        $this->observable->notifyObservers();
    }
    public function __toString()
    {
        return "Duck Call";
    }
}