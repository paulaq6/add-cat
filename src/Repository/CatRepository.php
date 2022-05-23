<?php

namespace Kedzi\AddCat\Repository;
use Kedzi\AddCat\Database\MysqlConnection;
use PDO;

final class CatRepository
{
    public function findAll(): array
    {
        $dbh = MysqlConnection::connection();

        $query = $dbh->query('SELECT * FROM cat');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
