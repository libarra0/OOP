<?php

include("Car.php");
include("Account.php");

$car = new Car("AW456", new Account("Leonardo Ibarra", "LEO685"));
$car -> printDataCar()

?>