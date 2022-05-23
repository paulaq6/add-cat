<?php

use Kedzi\AddCat\Database\MysqlConnection;
use Kedzi\AddCat\Repository\CatRepository;

require_once __DIR__ . "/../vendor/autoload.php";

// $dbh = MysqlConnection::connection();

// $query = $dbh->query('SELECT * FROM cat');
// $data = $query->fetchAll(PDO::FETCH_ASSOC);

// var_dump($data);


$catRepository = new CatRepository;

$cats=$catRepository->findAll();
var_dump($cats);
