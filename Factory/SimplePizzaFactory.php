<?php


class SimplePizzaFactory
{
    public function createPizza(string $type):Pizza
    {
        $pizza=null;
        if ($type==="cheese"){
            $pizza=new CheesePizza;
        }elseif ($type=="pepperoni"){
            $pizza=new PepperoniPizza;
        }elseif ($type === "clam"){
            $pizza=new ClamPizza;
        }elseif ($type === "veggie"){
            $pizza= new VeggiePizza;
        }
        return $pizza;
    }
}