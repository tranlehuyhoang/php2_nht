<?php

namespace App\model;

use PDO;
use PDOException;

class SanPham
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

    public function getAllProducts()
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllProductsDesc()
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products ORDER BY id DESC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProductsByCategory($categoryId)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products WHERE category_id = :category_id ORDER BY id DESC";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getNew5Products($limit = 5)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products ORDER BY date_created DESC LIMIT :limit";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getPopular5Products($limit = 5)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products ORDER BY view DESC LIMIT :limit";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getSale5Products($limit = 5)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products WHERE sale > 20 LIMIT :limit";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProductByIdDesc($product_id)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProductById($product_id)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_products WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function adminAddProduct($name, $price, $quantity, $image, $shortDesc, $longDesc)
    {
        $conn = $this->getConnection();
        $query = "INSERT INTO ps_products (name, price, quantity, image, short_desc, long_desc, date_created) 
              VALUES (:name, :price, :quantity, :image, :short_desc, :long_desc, NOW())";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':short_desc', $shortDesc, PDO::PARAM_STR);
        $stmt->bindParam(':long_desc', $longDesc, PDO::PARAM_STR);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            // echo "Lỗi: " . $e->getMessage();
            throw $e;
        }
    }

    public function adminUpdateProduct($id, $name, $price, $quantity, $image, $shortDesc, $longDesc)
    {
        $conn = $this->getConnection();
        $query = "UPDATE ps_products 
              SET name = :name, price = :price, quantity = :quantity, image = :image, short_desc = :short_desc, long_desc = :long_desc
              WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':price', $price, PDO::PARAM_STR);
        $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        $stmt->bindValue(':short_desc', $shortDesc, PDO::PARAM_STR);
        $stmt->bindValue(':long_desc', $longDesc, PDO::PARAM_STR);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            // echo "Lỗi: " . $e->getMessage();
            throw $e;
        }
    }

    public function adminDeleteProduct($id)
    {
        $conn = $this->getConnection();
        $sql = "DELETE FROM ps_products WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            // echo "Lỗi: " . $e->getMessage();
            throw $e;
        }
    }
}
