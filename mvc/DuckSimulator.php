<?php
function my_autoloader($class){
    include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");
function simulate(Quackable $duck)
{
    $duck->quack();
}
$duckFactory=new CountingDuckFactory();
$flock=new Flock();

$mallardDuck = $duckFactory->createMallardDuck();
$redheadDuck = $duckFactory->createRedheadDuck();
$duckCall=$duckFactory->createDuckCall();
$rubberDuck= $duckFactory->createRubberDuck();
$gooseDuck = new GooseAdapter(new Goose());


$flock->add($mallardDuck);
$flock->add($redheadDuck);
$flock->add($duckCall);
$flock->add($rubberDuck);

$flockOfMallards=new Flock();

$mallardOne=$duckFactory->createMallardDuck();
$mallardTwo=$duckFactory->createRubberDuck();
$mallardThree=$duckFactory->createMallardDuck();
$mallardFour=$duckFactory->createMallardDuck();

$flockOfMallards->add($mallardTwo);
$flockOfMallards->add($mallardOne);
$flockOfMallards->add($mallardThree);
$flockOfMallards->add($mallardFour);


$flock->add($flockOfMallards);

print "\n Duck Simulator: Whole Flock Simulation\n";
simulate($flock);
print "\n Simulator: Mallard Flock Simulation\n";
simulate($flockOfMallards);

print "The ducks quacked ".QuackCounter::getQuacks() . " times";