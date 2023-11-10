<?php


interface Subjecr
{
    public function RegisterObserver(Observer $observer):void;

    public function RemoveObserver(Observer $observer):void;

    public function NotifyObservers():void;

}