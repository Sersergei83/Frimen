<?php


abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings=[];
    public function prepare():void
    {
        print "Подготовка ".$this->name."\n";
        print "Перемешивание теста...\n";
        print "Добавляем соус...\n";
        print "Добавляем начинки:";
        foreach ($this->toppings as $topping)
        {
            print " ".$topping;
        }
        print "/n";
    }

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

    public function getName()
    {
        return $this->name;
    }
}