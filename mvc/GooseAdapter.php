<?php


class GooseAdapter implements Quackable
{
    private Goose $goose;
    public Observable $observable;
    public function __construct(Goose $goose)
    {
        $this->goose=$goose;
        $this->observable=new Observable($this);
    }
    public function quack(): void
    {
        $this->goose->honk();
        $this->notifyObservers();
    }
    public function registerObserver(Observer $observer): void
    {
        $this->observable->registerObserver();
    }
    public function notifyObservers(): void
    {
        $this->observable->registerObserver();
    }

}