<?php

class Db extends PDO 
{
    public function __construct($sgbd, $host, $db, $username, $password, $persistent)
    {   
        $options = [
            PDO::ATTR_PERSISTENT => $persistent,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        //dns = sprintf(%$:host%, %$:username%, %$:password%, %$:persistent%)//
        parent::__construct($sgbd, $host, $db, $username, $password, $persistent);
    }
}