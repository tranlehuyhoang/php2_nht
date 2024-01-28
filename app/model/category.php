<?php

namespace App\model;

use PDO;
use PDOException;

class Category
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

    public function getAllCategories()
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_category";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getAllCategoriesDesc()
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_category ORDER BY id DESC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCategoryById($category_id)
    {
        $conn = $this->getConnection();
        $query = "SELECT * FROM ps_category WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $category_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function adminAddCategory($name, $slug)
    {
        $conn = $this->getConnection();
        $query = "INSERT INTO ps_category (name, slug, date_created) 
              VALUES (:name, :slug, NOW())";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            // echo "Lỗi: " . $e->getMessage();
            throw $e;
        }
    }

    public function adminUpdateCategory($id, $name, $slug)
    {
        $conn = $this->getConnection();
        $query = "UPDATE ps_category
              SET name = :name, slug = :slug
              WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':slug', $slug, PDO::PARAM_STR);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            // echo "Lỗi: " . $e->getMessage();
            throw $e;
        }
    }
    
    public function adminDeleteCategory($id)
    {
        $conn = $this->getConnection();
        $sql = "DELETE FROM ps_category WHERE id = :id";
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
