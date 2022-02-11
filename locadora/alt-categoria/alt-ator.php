<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Alteração de ator</title>
</head>
<body>
    <?php
        include 'menu.php';
        include 'conexao.php';
        if(isset($_GET['ator_id']))
        {
            $ator = $_GET['ator_id'];
            $query = "SELECT ator_id,primeiro_nome, ultimo_nome FROM ator WHERE ator_id = $ator ";
            $resultado = mysqli_query($conexao,$query);
            $linha = mysqli_fetch_array($resultado);
        }
       else
       {
              header('Location: http://localhost/locadora/erro.php'); 
              exit;
              mysqeli_close($conexao)
       }
    ?>
    <h1>Alteração de ator</h1><hr>
    <form name="FrmAtor" method="post"  action="confalt-ator.php">
   Primeiro Nome: <input type="text" name="nome" autofocus required value="<?php echo $linha['primeiro_nome']; ?>">
   <br><br>
   Último Nome: <input type="text" name="nome" autofocus required value="<?php echo $linha['ultimo_nome']; ?>">
   <br><br>
   <input type="submit" value="Alterar" title="Alterar">
   <input type="hidden" name="ator_id" value="<?php echo $linha['ator_id']; ?>">
</form>
</body>
</html>