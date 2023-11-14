<?php


class ClamPizza extends Pizza
{
    protected PizzaIngredientFactory $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory=$ingredientFactory;
    }
    public function prepare(): void
    {
        print "Подготовка".$this->name."\n";
        $this->dough=$this->ingredientFactory->createDough();
        $this->sauce=$this->ingredientFactory->createSauce();
        $this->cheese=$this->ingredientFactory->createCheese();
        $this->clam=$this->ingredientFactory->createClam();
    }
}