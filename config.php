<?php

//CONFIGURAÇÕS DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'paciente';

//CONEXAO COM NOSSO BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha,$banco);

//VERIFICAR CONEXAO
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}

?>