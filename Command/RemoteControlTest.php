<?php
function my_autoloader($class){
    include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");

$remoteControl=new RemoteControl();


// Создание всехустройств
$livingRoomLight=new Light("Жилая комната");
$kitchenLight=new Light("Кухня");
$ceilingFan=new CeilingFan("Жилая комната");
$garageDoor=new GarageDor();
$stereo=new Stereo();


//Создание команд дляуправления освещением.
$livingRoomLightOn=new LightOnCommand($livingRoomLight);
$livingRoomLightOff=new LightOffCommand($livingRoomLight);
$kitchenLightOn=new LightOnCommand($kitchenLight);
$kitchenLightOff=new LightOffCommand($kitchenLight);


//Создание команд дляуправления потолочнымвентилятором
$ceilingFanOn=new CeilingFannOnCommand($ceilingFan);
$ceilingFanOff=new CeilingFanOffCommand($ceilingFan);


//Создание команд для управления дверью гаража
$garageDoorUp=new GarageDoorOpenCommand($garageDoor);
$garageDoorDown=new GarageDoorDownCommand($garageDoor);

//Создание команд для управления стереосистемой.
$stereoOnWithCD=new StereoOnWithCDCommand($stereo);
$stereoOffWithCD=new StereoOffCommand($stereo);

//Готовые команды связываютсяс ячейкамипульта.
$remoteControl->setCommand(0,$livingRoomLightOn,$livingRoomLightOff);
$remoteControl->setCommand(1,$kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2,$ceilingFanOn, $ceilingFanOff);
$remoteControl->setCommand(3,$stereoOnWithCD, $stereoOffWithCD);

//Пульт готов к проверке!Перебираем все ячейки,и для каждой ячейки имитируем нажатие кнопок «вкл» и «выкл»
$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->onButtonWasPushed(3);
$remoteControl->offButtonWasPushed(3);
$remoteControl->undoButtonWasPushed();;