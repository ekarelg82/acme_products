<?php 

class Database{
    // specify the database connection credentials
    private $host = 'localhost';
    private $db_name = 'php_react_crud';
    private $username = 'root';
    private $password = 'root';
    public $conn;

    // get the databse connection
    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, 
            $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
