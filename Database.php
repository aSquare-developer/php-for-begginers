<?php

class Database {

    public $connection;

    public function __construct() {
        $dsn = "mysql:host=localhost;port=3306;dbname=php-for-beginners;charset=utf8mb4";
        $this->connection = new PDO($dsn, 'root', 'rootroot');
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}