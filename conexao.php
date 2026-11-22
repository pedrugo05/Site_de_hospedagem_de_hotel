

<?php

$usuario = 'root';
$senha = ''; //ponha aqui sua senha do seu banco de dados para ter a conexão//
$database = 'celke';  //ponha aqui o nome do seu banco de dados que será feito a conexão//
$host = 'localhost'; 

$mysqli = new mysqli($host, $usuario, $senha, $database, );

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}