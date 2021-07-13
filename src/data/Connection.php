<?php
class Connection
{
    public static function getConnection()
    {
        $database = "atividade";
        $username = "root";
        $senha = "root";
        return new PDO("mysql:host=localhost;dbname=$database", $username, $senha);
    }
}
