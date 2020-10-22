<?php
require_once("Car.php");

class UberBlack extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function _construct($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::_construct($license, $driver);
        $this->$typeCarAccepted = $typeCarAccepted;
        $this->$seatsMaterial = $seatsMaterial;
    }
}

?>