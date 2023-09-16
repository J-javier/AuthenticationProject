<?php

$file = $_SERVER["DOCUMENT_ROOT"] . "/.env" ;

if (file_exists($file)){
    $variables = parse_ini_file($file);
    $_ENV = $variables;
}


class database 
{

    private $pdo;

    public function __construct()
        
    {
        try {
            $host = $_ENV["DB_HOST"];
            $username = $_ENV["DB_USERNAME"];
            $password = $_ENV["DB_PASSWORD"];
            $port = $_ENV["DB_PORT"];
            $dbname = $_ENV["DB_DATABASE"];

            $attributes=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
           

            $this->pdo = new PDO($dsn,$username,$password,$attributes);

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }

    }

    public function connect()
    {
        return $this->pdo;
    }

    public function disconnect(){
        $this->pdo = null;
    }

}

?> 