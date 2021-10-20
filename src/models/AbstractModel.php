<?php

abstract class AbstractModel
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host='. HOST . ';dbname='. DATABASE . ';charset=UTF8', USER, PASSWORD);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
