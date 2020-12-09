<?php
try{
    $server = "localhost";
    $usuario = "root";
    $senha = "My5Ql@2020";
    //passa como parâmetro: o tipo do banco; o servidor; nome o db, usuário e senha
    $conn = new PDO("mysql:host=$server;dbname=form_php", $usuario, $senha);
    $conn->exec("set names utf-8");
    echo "Conexão OK";
}catch(PDOException $e){
    echo "Erro do PDO ".$e->getMessage();
}catch(Exception $e){
    echo "Erro ".$e->getMessage();
}
?>