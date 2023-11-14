<?php


class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type=="cheese")
        {
            return new ChicagoStyleCheesePizza();
        } elseif ($type==="veggie")
        {
            return new ChicagoStyleVeggiePizza();
        } elseif ($type==="clam")
        {
            return new ChicagoStyleClamPizza();
        } elseif ($type==="pepperoni")
        {
            return new ChicagoStylePepperoniPizza();
        } else {
            /** @noinspection PhpSingleStatementWithBracesInspection */
            return null;
        }
    }
}