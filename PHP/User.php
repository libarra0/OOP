<?php
require_once("Account.php");

class User extends Account
{
    public function _construct($name, $document)
    {
        parent::_construct($name, $document);
    }
}

?>