<?php
require_once("Payment.php");

class Paypal extends Payment
{
    public $email;

    public function _construct($id, $email)
    {
        parent::_construct($id);
        $this->$email = $email;
    }
}

?>