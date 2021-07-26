<?php
class Connection
{
    public static function getConnection()
    {
        $database = "atividade";
        $username = "manuel";
        $senha = "123";
        return new PDO("mysql:host=127.0.0.1;dbname=$database", $username, $senha);
    }
}
