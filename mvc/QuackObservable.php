<?php


interface QuackObservable
{
    public function registerObserver(Observer $observer):void;
    public function notifyObservers():void;

}