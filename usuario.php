<?php

class Usuario {
    public $nome;
    public $email;
    public $senha;

    function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function cadastrar(){

        // criando conexao
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $dbname = "cadastro";
        $conn = new mysqli($servidor, $usuario, $senha, $dbname);

        // verifica se a cnn com sucesso
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

        // prepara a query 
        $sql = "INSERT INTO cadastro (nome, email, senha) VALUE ('$this->nome', '$this->email', '$this->senha')";

        // executa a query
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
          
        // fecha a conexao com o banco de dados
        $conn->close();
    }
}