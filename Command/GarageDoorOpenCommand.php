<?php


class GarageDoorOpenCommand implements Command
{
    protected GarageDor $garageDor;

    public function __construct(GarageDor $garageDor)
    {
        $this->garageDor=$garageDor;
    }
    public function execute(): void
    {
        $this->garageDor->up();
    }
    public function undo(): void
    {
        $this->garageDor->down();
    }
}