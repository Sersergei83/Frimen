<?php


abstract class Pizza
{
    protected string $name;
    protected Dough $dough;
    protected Sauce $sauce;
    protected array $veggies=[];
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clam;
    abstract public function prepare():void;


    public function bake():void
    {
        print "Выпекать 25 минут при температуре 350.\n";
    }

    public function cut():void
    {
        print "Разрезаем пиццу на диагональные ломтики";
    }

    public function box():void
    {
        print "Поместите пиццу в официальную коробку PizzaStore.";
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}