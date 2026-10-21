<?php 

class Database {

    private $servidor = 'localhost'; 
    private $usuario = 'root'; 
    private $senha = ''; 
    private $banco = 'todo_list'; 

    public $conexao; 

    public function conectar(){

        $this -> conexao = new mysqli($this -> servidor, $this -> usuario, $this -> senha, $this -> banco ); 

        if ($this -> conexao -> connect_error){

            die ("Deu erro na conexão". $this -> conexao -> connect_error);
        }

        return $this -> conexao; 
    }
}

?>