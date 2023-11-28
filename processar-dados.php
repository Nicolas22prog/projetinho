<?php
require_once 'config.php';

//pegando os dados do cadastro
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$sus = $_POST['sus'];
$cpf = $_POST['cpf'];
$mae = $_POST['mae'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_atual = date('d/m/Y');

 

$smtp = $conn->prepare("INSERT INTO paciente (nome, nascimento, sus, cpf, mae, endereco, email, telefone, data) VALUES (?,?,?,?,?,?,?,?,?)");
$smtp->bind_param("sssssssss",$nome, $nascimento, $sus, $cpf, $mae, $endereco, $email, $telefone, $data_atual,);

if($smtp->execute()){
    echo "Cadastro Concluido com sucesso";    
}else{
    echo "Erro no cadastro: " .$smtp->error;
}

$smtp->close();
$con->close();

?>