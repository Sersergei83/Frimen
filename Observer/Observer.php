<?php


interface Observer
{
    public function Update(float $temp,float $humidity, float $pressure):void;
}