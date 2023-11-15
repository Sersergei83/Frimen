<?php


class CeilingFannOnCommand implements Command
{
    protected CeilingFan $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan=$ceilingFan;
    }
    public function execute(): void
    {
        $this->ceilingFan->on();
    }
    public function undo(): void
    {
        $this->ceilingFan->off();
    }
}