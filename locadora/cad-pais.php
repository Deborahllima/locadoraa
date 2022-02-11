<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Cadastro de País</title>
    <?php
    include 'menu.php';
    ?>
</head>
<body>
    <h1>Cadastro de País</h1><hr>
    <form name="FrmPais" method="post"  action="">
   País: <input type="text" name="pais" autofocus required><br><br>
   Data: <input type="datetime-local" name="data" required><br><br>
   <input type="submit" name="Enviar">
</form>
</body>
</html>

<?php

if(isset($_POST['pais']) && isset($_POST['data']))
{
$pais = $_POST['pais'];
$data = $_POST['data'];
include 'conexao.php';
$query = "INSERT INTO pais VALUES(null,'$pais','$data')";
$resultado = mysqli_query($conexao, $query);

if($resultado)
{
    echo "País cadastrado com sucesso!";
}

else{
        echo "Erro ao cadastrar".mysqli_error($conexao);

}
}

include 'conexao.php';
include 'lista-pais.php';
?>
