<?php


class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name="Глубокая сырная пицца по-чикагски";
        $this->dough="Очень густое тесто для корочки";
        $this->sauce="Сливово-томатный соус";
        $this->toppings[]="Тертый сыр Моцарелла";
    }

    public function cut():void
    {
        print "Нарезаем пиццу на квадратные ломтики";
    }
}