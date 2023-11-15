<?php


class Stereo
{
    public function on():void
    {
        print "Стереосистема включена \n";
    }

    public function off():void
    {
       print "Стереосистема выключена \n";
    }

    public function setCD():void
    {
       print "Вставлен CD диск \n";
    }

    public function setDVD():void
    {
        print "Вставлен DVD диск \n";
    }

    public function setRadio():void
    {
        print "Включено радио \n";
    }

    public function setVolume(int $volume):void
    {
        print "Установлено громкость {$volume} \n";
    }
}