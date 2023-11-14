<?php


class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type=="cheese")
        {
            return new NYStyleCheesePizza();
        } elseif ($type==="veggie")
        {
            return new NYStyleVeggiePizza();
        } elseif ($type==="clam")
        {
            return new NYStyleClamPizza();
        } elseif ($type==="pepperoni")
        {
            return new NYStylePepperoniPizza();
        } else {
            /** @noinspection PhpSingleStatementWithBracesInspection */
            return null;
        }
    }
}