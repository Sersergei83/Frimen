<?php


class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrusDough();
    }
    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }
    public function createCheese(): Ceese
    {
        return new ReggianoCheese();
    }
    public function createVeggies(): array
    {
        $vegies={new Garlic(),new Onion(),new Mushroom(),new RedPepper()};
        return $vegies;
    }
    public function createPepperni(): Pepperoni
    {
       return new SlicedPepperoni();
    }
    public function createClam(): Clam
    {
        return new FreshClams();
    }
}