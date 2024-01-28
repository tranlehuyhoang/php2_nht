<?php

namespace App\model;

use PDO;
use PDOException;

class Order
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

    public function getAllOrders()
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_order";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOrdersByUser($email)
    {
        $conn = $this->getConnection();

        $query = "
          SELECT o.*, COUNT(od.quantity) AS total_quantity
          FROM ps_order o
          LEFT JOIN ps_order_detail od ON o.id = od.order_id
          WHERE o.email = ?
          GROUP BY o.id
        ";

        $stmt = $conn->prepare($query);
        $stmt->execute([$email]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrderById($orderId)
    {
        $conn = $this->getConnection();

        $query = "
          SELECT 
            o.*, 
            od.product_id, 
            p.name as product_name,
            od.quantity, 
            od.price 
          FROM ps_order o
          JOIN ps_order_detail od ON o.id = od.order_id
          JOIN ps_product p ON p.id = od.product_id
          WHERE o.id = ?
        ";

        $stmt = $conn->prepare($query);
        $stmt->execute([$orderId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
