<?php

class Product
{
    public static function getAll()
    {
        include_once __DIR__.'/../config/database.php';
        $conn = new PDO('mysql:host='.$DB['host'].';dbname=heist', $DB['user'], $DB['password']);
        $statement = 'select * from products';

        $result = $conn->query($statement);

        return $result->fetchAll(PDO::FETCH_CLASS);
    }
}
