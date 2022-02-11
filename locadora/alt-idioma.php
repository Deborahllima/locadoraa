<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Alteração de Idioma</title>
</head>
<body>
    <?php
        include 'menu.php';
        include 'conexao.php';
        if(isset($_GET['idioma_id']))
        {
            $idioma = $_GET['idioma_id'];
            $query = "SELECT idioma_id,nome FROM idioma WHERE idioma_id = $idioma ";
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
    <h1>Alteração de Idioma</h1><hr>
    <form name="FrmIdioma" method="post"  action="confalt-idioma.php">
   Nome: <input type="text" name="nome" autofocus required value="<?php echo $linha['nome']; ?>">
   <br><br>
   <input type="submit" value="Alterar" title="Alterar">
   <input type="hidden" name="idioma_id" value="<?php echo $linha['idioma_id']; ?>">
</form>
</body>
</html>