<?php
class Database
{
    public $host;
    public $dbname;
    public $username;
    public $passwordD;
    public $pdo;

    public function __construct($host = 'localhost', $dbname = 'MaBagnole', $username = 'root', $passwordD = '')
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $passwordD;
        $conn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";

        $error = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->pdo = new PDO($conn, $this->username, $this->passwordD, $error);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }    
    }

    public function getPdo(){
        return $this->pdo ;
    }
}

?>