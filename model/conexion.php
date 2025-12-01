<?php
require 'config/config.php';

class Database{
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
    private $charset = DB_CHARSET;
    private $pdo;
    private $options = [
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    public function connect(){
         if($this->pdo === null){
            $dsn = "mysql:host={$this->host}+;dbname={$this->db_name};charset={$this->charset}";
            try{
                $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass, $this->options);

               // echo 'Coneción con éxito' . $this->db_name;
            }catch(PDOException $e){
                echo 'Error: '. $e->getMessage();
            }
         }
         return $this->pdo;
    }
}


?>