<?php

namespace App\model;

use PDO;
use PDOException;

class Cart
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    private function getConnection()
    {
        return $this->db->connection_database();
    }
    
    public function checkCart($id)
    {
        // session_start();
    
        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            return -1;
        }
    
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i][0] == $id) {
                return $i;
            }
        }
    
        return -1;
    }
}
