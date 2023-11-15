<?php


class GarageDoorDownCommand implements Command
{
    protected GarageDor $garageDor;

    public function __construct(GarageDor $garageDor)
    {
        $this->garageDor=$garageDor;
    }
    public function execute(): void
    {
        $this->garageDor->down();
    }
    public function undo(): void
    {
        $this->garageDor->up();
    }
}