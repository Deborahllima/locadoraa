<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Cadastro de Ator</title>
    <?php
    include 'menu.php';
    ?>
</head>
<body>
    <h1>Cadastro de Ator</h1><hr>
    <form name="FrmAtor" method="post"  action="">
   Primeiro nome: <input type="text" name="primeiro_nome" autofocus required><br><br>
   Último nome: <input type="text" name="ultimo_nome" autofocus required><br><br>
   Última Atualizaçao: <input type="datetime-local" name="ultima_atualizacao" required><br><br>
   <input type="submit" name="Enviar">
</form>
</body>
</html>

<?php
if(isset($_POST['primeiro_nome']) && isset($_POST['ultima_atualizacao']) && isset($_POST['ultimo_nome']))
{
$primeiro_nome = $_POST['primeiro_nome'];
$ultimo_nome = $_POST['ultimo_nome'];
$ultima_atualizacao = $_POST['ultima_atualizacao'];
include 'conexao.php';
$query = "INSERT INTO ator VALUES(null,'$primeiro_nome','$ultima_atualizacao','$ultimo_nome')";
$resultado = mysqli_query($conexao, $query);

if($resultado)
{
    echo "Ator cadastrado com sucesso!";
}

else{
        echo "Erro ao cadastrar".mysqli_error($conexao);

}
}

include 'conexao.php';
include 'lista-ator.php';
?>