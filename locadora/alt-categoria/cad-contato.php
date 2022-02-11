<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Cadastro de contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
    include 'menu.php';
    ?>
</head>
<body>
    <h1>Atendimento ao Cliente</h1><hr>
    <form name="Frmcontato" method="post"  action="">
   Nome: <input type="text" name="nome" autofocus required><br><br>
   Email: <input type="email" name="email" autofocus required><br>
   Descrição:<br><textarea cols="20" rows="5" name="descricao"></textarea><br><br>
   <input type="submit" name="Enviar">
</form>
</body>
</html>

<?php

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['descricao']))
{
$nome = $_POST['nome'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];

mail("0000488340@senaimgaluno.com.br", "Contato via site", $descricao);

if($resultado)
{
    echo "Mensagem enviada!";
}

else
{
    echo "Erro ao enviar mensagem";
}
include 'conexao.php';
$query = "INSERT INTO contato VALUES('$nome','$email', '$descricao')";
$resultado = mysqli_query($conexao, $query);

if($resultado)
{
    echo "contato cadastrada com sucesso!";
}

else{
        echo "Erro ao cadastrar".mysqli_error($conexao);

}
}

include 'conexao.php';

?>
