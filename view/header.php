<?php
class Database {
    private $host = "localhost";
    private $dbname = "my_database";
    private $username = "username";
    private $password = "password";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            echo "Connection errors: " . $e->getMessage();
        }
    }
}
