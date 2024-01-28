<?php


class database
{

    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
    private $db_host = 'localhost';
    private $db_name = 'root';
    private $db_username = 'ps27199_php2';
    private $port = "3309";
    private $db_password = '';

    public function dbConnection()
    {

        try {
            $conn = new PDO('mysql:host=' . $this->db_host . '; port="3309"; dbname=' . $this->db_name, $this->db_username, $this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection error " . $e->getMessage();
            exit;
        }
    }
}