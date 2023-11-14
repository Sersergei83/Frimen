<?php
function my_autoloader($class){
    include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");
$nyStore=new NYStylePizzaStore();
$chicagoStore=new ChicagoStylePizzaStore();

$pizza=$nyStore->orderPizza("cheese");
print "Итан заказал ".$pizza->getName()."\n";

$pizza=$chicagoStore->orderPizza("cheese");
print "Joel заказал ".$pizza->getName()."\n";