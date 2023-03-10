<?php

namespace App\Models;

use \PDO;

class DB
{
    private $host = 'localhost';
    private $user = 'postgres';
    private $pass = 'maa';
    private $dbname = 'customers_api';

    public function connect()
    {
        $conn_str = "pgsql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
