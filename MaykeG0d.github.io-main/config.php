<?php

//tipo as variavel
$server = 'localhost';
$usuario  = 'root';
$senha = 'root';
$banco  = 'trabalhoescola';

//conexao  dos dado
$conn = new mysqLi($server, $usuario, $senha, $banco);


if($conn->connect_error){

    die("falou valeu perdeu meu".$conn->connect_error);
}





?>