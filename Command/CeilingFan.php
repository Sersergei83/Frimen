<?php


class CeilingFan
{
    private string $living;

    public function __construct(string $living)
    {
        $this->living=$living;
    }
    public function on()
    {
        print "Кондиционер включен в {$this->living} \n";
    }

    public function off()
    {
        print "Кондиционер  выключен в {$this->living} \n";
    }
}