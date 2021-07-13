<?php

namespace repositories;

use PDO;

class Repository
{
    public PDO $conn;

    function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }
}
