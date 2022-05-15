<?php

use Kedzi\AddCat\Database\MysqlConnection;

require_once __DIR__ . "/../vendor/autoload.php";

$dbh = MysqlConnection::connection();

$query = $dbh->query('SELECT * FROM cat');
$data = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($data);
