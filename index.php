<?php

require 'functions.php';
//require 'router.php';


// connect to our MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=php-for-beginners;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', 'rootroot');

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);