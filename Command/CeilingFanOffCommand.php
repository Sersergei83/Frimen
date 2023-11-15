<?php


class CeilingFanOffCommand implements Command
{
    protected CeilingFan $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan=$ceilingFan;
    }
    public function execute(): void
    {
        $this->ceilingFan->off();
    }
    public function undo(): void
    {
        $this->ceilingFan->on();
    }
}