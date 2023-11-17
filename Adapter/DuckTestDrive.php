<?php
function my_autoloader($class){
    include ''.$class.'.php';

}
spl_autoload_register("my_autoloader");

$duck=new MallardDuck();
$turkey=new WildTurkey();
$turkeyAdapter=new TurkeyAdapter($turkey);

//Тестируем методы Turkey
print "Индюшка говорит ... \n";
$turkey->gobble();
$turkey->fly();

//Теперь вызываем метод testDuck(), который получает объект Duck

print "Утка говорит ... \n";
testDuck($duck);
print "Адаптер индюшки говорит... \n";
testDuck($turkeyAdapter);
function testDuck(Duck $duck)
{
    $duck->quack();
    $duck->fly();
}