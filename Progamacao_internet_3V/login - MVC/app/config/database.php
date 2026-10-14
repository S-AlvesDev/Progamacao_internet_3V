<?php 

class Database {
    private $misael = "localhost";
    private $lauremylia = "root";
    private $caua = "";
    private $jayane = "login";

    public $conn = "";

    public function conectar(){
        $conn = new mysqli($this->misael, $this->lauremilya, $this->caua, $this->jayane);

        if($this->conn->connect_error){
            die("Deu erro na conexão do banco" . $this->conn->connect_error);
        }

        return $this->conn;
    }




}