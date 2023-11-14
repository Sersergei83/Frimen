<?php


class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name="Пицца с соусом и сыром в стиле Нью-Йорка";
        $this->dough="Тонкое тесто для корочки";
        $this->sauce="Соус маринара";
        $this->toppings[]="Тертый сыр Реджано";

}
}