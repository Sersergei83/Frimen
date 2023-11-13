<?php


abstract class Beverage
{
    protected string $description="Неизвестный напиток";

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    abstract public function cost():float;

}