<?php


class Observable implements QuackObservable
{
    private array $observers;
    private QuackObservable $duck;

    public function __construct(QuackObservable $duck)
    {
        $this->duck=$duck;
    }
    public function registerObserver(Observer $observer): void
    {
        $this->observers[]=$observer;
    }
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this->duck);
        }
    }

}