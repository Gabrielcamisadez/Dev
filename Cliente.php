<?php
//CLASSE:
    class Cliente{
        private $nome;
        private $idade;
        private $email;
        private $senha;

     //CONSTRUTOR:
        public function __construct($nome, $idade, $email, $senha)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
            $this->senha = $senha;
        }
    }

    //GETTER E SETTERS

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
