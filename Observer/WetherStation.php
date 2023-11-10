<?php
function my_autoloader($class){
include ''.$class.'.php';
}
spl_autoload_register("my_autoloader");
$wetherdata=new WeatherData();
$currentdisplay=new CurrentConditionsDisplay($wetherdata);
$statistic=new StatisticsDisplay($wetherdata);
$forecast=new ForecastDisplay($wetherdata);

$wetherdata->SetMeasurements(80.0,65.2,30.4);
$wetherdata->SetMeasurements(82,70,29.2);
$wetherdata->SetMeasurements(78,90,30.8);