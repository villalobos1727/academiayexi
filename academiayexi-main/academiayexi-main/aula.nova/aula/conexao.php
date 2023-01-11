<?php

$host ="localhost";
$user = "root";
$pass = "";
$dbnome = "academia";
$port = 3306;

try{

    $conn = new PDO ("mysql:host=$host;port=$port;dbname=" . $dbnome, $user, $pass)
    ;
       echo "conexão com banco de dados realizado com sucesso";
    
}catch(PDOException $erro){

    echo "Erro: conexão com banco de dados não realizada".$erro;

}