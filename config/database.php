<?php

class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {

            self::$connection = new PDO(
                "mysql:host=localhost;dbname=fitconnect;charset=utf8",
                "root",
                ""
            );

            self::$connection->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC
);
        }

        return self::$connection;
    }
}