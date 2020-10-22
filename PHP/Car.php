<?php
require_once("Account.php");

class Car
{
    public $d;
    public $license;
    public $driver;
    public $passenger;
    
    public function _constuct($license, $driver)
    {
        $this->licence = $license;
        $this->driver = $driver
    }
    
    public function printDataCar()
    {
        echo "License: ".$this->license."<br>";
        echo "Name: ".$this->driver->name."<br>";
        echo "Document: ".$this->driver->document."<br>";
    }
}

?>