<?php

namespace App\model;

use PDO;
use PDOException;

class database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $databasename = "ps27199_php2";
    protected $conn = null;

    function connection_database()
    {
        try {
            $conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->databasename;port=3309",
                $this->username,
                $this->password
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw $e;
        }
        return $conn;
    }
}
