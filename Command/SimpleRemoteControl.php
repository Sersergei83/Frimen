<?php


class SimpleRemoteControl
{
    protected Command $slot;

    public function __construct()
    {

    }

    public function setCommand(Command $command):void
    {
        $this->slot=$command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }

}