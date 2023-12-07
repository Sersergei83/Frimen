<?php
function my_autoloader($class){
    include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");
$mallerduck=new MallardDuck();
$mallerduck->performQuack();
$mallerduck->perfomFly();

$modelduck=new ModelDuck();
$modelduck->perfomFly();
$modelduck->setFlyBehavior(new FlyRocketPowered());
$modelduck->perfomFly();