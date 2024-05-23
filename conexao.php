<?php
$host = 'localhost';
$user = 'hoot';
$password = '';
$bd = "banco5";

conexao mysqli_connect($host, $user, $password, $bd);

$name = "";
$idade = "";
$email = "";
$bd = "lojaXYZ";
    mysqli_connect($name, $idade, $email)

        ?>

        <?php

try{
    global $conn;
    $conn = new PDO("mysql:dbname=banco5es;host=localhost;","root", "12345");
}catch(PDException $e){
    echo "Erro no PDO". $e->getMessage();
}catch(Exception $e){
    echo "Erro no Generico ". $e -> getMessage();
}
    

