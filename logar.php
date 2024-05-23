<?php

require_once './Cliente.php';
require_once './conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = new Cliente($usuario, 0, '', $senha);

if($user->logar()){
    header("location: ./formCadastroCliente.php");
}else{
    header("location: ./login.html");
}
?>
