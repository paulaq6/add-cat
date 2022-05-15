<?php

namespace Kedzi\AddCat\Database;

use PDO;

final class MysqlConnection
{
    private static ?PDO $connection = null;

    public static function connection(): PDO
    {
        if (self::$connection) {
            return self::$connection;
        }

        $user = 'root';
        $pass = '';

        self::$connection = new PDO('mysql:host=localhost;dbname=add_cat_prod', $user, $pass);
        
        return self::$connection;
    }
}
