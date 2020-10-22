<?php
require_once("Account.php");

class Driver extends Account
{
    public function _construct($name, $document)
    {
        parent::_construct($name, $document);
    }
}

?>