<?php


class Quackologist implements Observer
{
    public function update (QuackObservable $duck)
    {
        print "Quackologist: ".$duck." just quacked.";
    }

}