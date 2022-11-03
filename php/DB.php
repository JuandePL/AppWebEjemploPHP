<?php
class DB {
    private $jsonPath = "../env.json";
    public $json;
    
    function __constructor() {
        $this->json = json_decode(file_get_contents($this->jsonPath),TRUE);
        
        $connectionString = "mysql:dbname=" . $this->json['database'] . ";host=" . $this->json['host'];
        $user = $this->json['username'];
        $password = $this->json['password'];
        
        try {
            $this->db = new PDO($connectionString, $user, $password);
        } catch (PDOException $e) {
            echo "Error en la conexion" . $e->getMessage();
        }
    }
}

