<?php
require_once("Payment.php");

class Card extends Payment
{
    public $cardNumber;
    public $date;
    public $cvv;

    public function _construct($id, $cardNumber, $date, $cvv)
    {
        parent::_construct($id);
        $this->$cardNumber = $cardNumber;
        $this->$date = $date
        $this->$cvv = $cvv;
    }
}

?>