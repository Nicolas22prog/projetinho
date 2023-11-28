<?php
require_once 'config.php';

$senhaSecreta = '123';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhadigitada = $_POST['senha'];

    //DIGITOU A SENHA CERTO
    if($senhadigitada === $senhaSecreta){
        $sql = "SELECT * FROM paciente";
        $result = $conn->query($sql);
    }else{
        echo "<h1>Senha Incorreta!</h1>";
    }

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de pacientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
      
        <form method="post">
           <tr> 
            <td>Senha:
                <input type="password" name="password" size="40" required>
            </td>
           </tr>
           
            <button type="submit" name="cadastrar" value="Cadastrar">Enviar</button>
        </form>
    <div>    
        <?php if(isset($result) && $result->num_rows >0) : ?>
            <h2>Pacientes</h2>
            <ul>
                <?php while($row = $result->fetch_assoc()) :?>
                    <li>
                        <strong>Nome: </strong> <?php echo $row['nome'];?> <br>
                        <strong>nascimento: </strong> <?php echo $row['nascimento'];?> <br>
                        <strong>SUS: </strong> <?php echo $row['sus'];?> <br>
                        <strong>CPF: </strong> <?php echo $row['cpf'];?> <br>
                        <strong>Mae: </strong> <?php echo $row['mae'];?> <br>
                        <strong>Endereço: </strong> <?php echo $row['endereco'];?> <br>
                        <strong>email: </strong> <?php echo $row['email'];?> <br>
                        <strong>telefone: </strong> <?php echo $row['telefone'];?> <br>
                        <strong>Data: </strong> <?php echo $row['data'];?> <br>
                    </li>
                    <?php endwhile; ?>
            </ul>
             <?php else : ?>
                <p>Nenhum cadastro encontrado </p>    
                <?php  endif; ?>
    </div>        
</body>
</html>