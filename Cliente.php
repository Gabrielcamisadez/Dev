<?php

    class Cliente{
        private $nome;
        private $idade;
        private $email;
        private $senha;
    

    public function __construct($nome, $idade, $email, $senha){
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> email = $email;
        $this-> senha = $senha;
    }

    public function setNome($nome){
        $this ->nome = $nome;
    }

    public function getNome(){
        return $this ->nome;
    }
    
    public function setIdade($idade){
        $this ->idade = $idade;
    }

    public function getIdade(){
        return $this -> idade;
    }

    public function setEmail($email){
        $this -> email = $email;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setSenha($senha){
        $this -> senha = $senha;
    }

    public function getSenha(){
        return $this -> senha;
    }

    public function cadastrar(){
        global $conn;
        $sql = "INSERT INTO Clientes(nome, idade, email,senha)VALUES(:nome,:idade,:email,:senha)";
        $stmt = $conn -> prepare($sql);
        $stmt ->bindValue(":nome", $this ->nome);
        $stmt ->bindValue(":idade", $this -> idade);
        $stmt ->bindValue(":email", $this -> email);
        $stmt ->bindValue(":senha", $this -> senha);
        

        $stmt -> execute();
    }

    public function logar(){
        global $conn;
        $sql = "SELECT * FROM Clientes WHERE nome LIKE :nome AND senha LIKE :senha";
        $stmt = $conn -> prepare($sql);
        $stmt->bindValue(":nome", this->nome);
        $stmt->bindValue("senha", this->senha);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO ::FETCH_ASSOC);

        if($stmt->rowCount() > 0){
            session_start();
            $_SESSION['usuario'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];
            return true;
        }
        
        return false;
        

    }
}
