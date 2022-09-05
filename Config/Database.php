<?php

namespace Config {

    use PDO;

    class Database
    {
        static function getConnection(): \PDO
        {
            $host = "localhost";
            $port = 33061;
            $dbname = "Belajar_PHP_Todolist";
            $username = "root";
            $password = "1234";
            return new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
        }
    }
}
