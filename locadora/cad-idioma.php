<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Cadastro de idioma</title>
    <?php
    include 'menu.php';
    ?>
</head>
<body>
    <h1>Cadastro de idioma</h1><hr>
    <form name="Frmidioma" method="post"  action="">
   Nome: <input type="text" name="nome" autofocus required><br>
   Data: <input type="datetime-local" name="data" required><br><br>
   <input type="submit" name="Enviar">
</form>
</body>
</html>

<?php

if(isset($_POST['nome']) && isset($_POST['data']))
{
$nome = $_POST['nome'];
$data = $_POST['data'];
include 'conexao.php';
$query = "INSERT INTO idioma VALUES(null,'$nome','$data')";
$resultado = mysqli_query($conexao, $query);

if($resultado)
{
    echo "Idioma cadastrado com sucesso!";
}

else{
        echo "Erro ao cadastrar".mysqli_error($conexao);

}
}

include 'conexao.php';
include 'lista-idioma.php';
?>
