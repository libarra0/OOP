<?php

// include("Car.php");
// include("Account.php");

// $car = new Car("AW456", new Account("Leonardo Ibarra", "LEO685"));
// $car -> printDataCar();

require_once("Car.php");
require_once("UberX");
require_once("UberPool");
require_once("Account.php");

$uberX = new UberX("AW456", new Account("Leonardo Ibarra", "LEO685"), "Toyota", "Corolla");
$uberX -> printDataCar()

$uberPool = new UberPool("AW456", new Account("Samantha Ibarra", "SAM426"), "Toyota", "Yaris");
$uberPool -> printDataCar()

?>