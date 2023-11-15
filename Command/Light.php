<?php


class Light
{
    private string $living;

    public function __construct(string $living)
    {
        $this->living=$living;
    }
    public function on()
    {
        print "Лампочка включена в {$this->living} \n";
    }

    public function off()
    {
        print "Лампочка выключена в {$this->living} \n";
    }
}