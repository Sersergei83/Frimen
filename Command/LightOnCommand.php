<?php


class LightOnCommand implements Command
{
protected Light $light;

    public function __construct(Light $light)
    {
        $this->light=$light;
    }
    public function execute(): void
    {
       $this->light->on();
    }
    public function undo(): void
    {
        $this->light->off();
    }

}