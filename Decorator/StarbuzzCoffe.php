<?php
function my_autoloader($class){
    include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");

$beverage=new Espresso();
print $beverage->getDescription()."$:".$beverage->cost()."\n";

$beverage2=new DarkRost();
$beverage2=new Mocha($beverage2);
$beverage2=new Mocha($beverage2);
$beverage2=new Whip($beverage2);

print $beverage2->getDescription()." $".$beverage2->cost()."\n";

$beverage3=new HouseBlend();
$beverage3=new Soy($beverage3);
$beverage3=new Mocha($beverage3);
$beverage3=new Whip($beverage3);

print $beverage3->getDescription()." $".$beverage3->cost()."\n";