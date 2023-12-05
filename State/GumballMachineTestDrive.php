<?php
function my_autoloader($class){
    include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");
$gumballMachine=new GumballMachine(5);
print $gumballMachine;
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

print $gumballMachine;
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
print $gumballMachine;