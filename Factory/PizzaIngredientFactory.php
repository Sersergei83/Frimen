<?php


interface PizzaIngredientFactory
{
    public function createDough():Dough;

    public function createSauce():Sauce;

    public function createCheese():Ceese;

    public function createVeggies():array;

    public function createPepperni(): Pepperoni;

    public function createClam():Clam;
}