<?php
//*Стандартная
//утка-кряква

class MallardDuck implements Quackable
{
    public Observable $observable;

    public function __construct()
    {
        $this->observable=new Observable($this);
    }
    public function quack(): void
    {
        print "Quack\n";
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
        return "Mallard Duck";
    }
}