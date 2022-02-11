<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Alteração de País</title>
</head>
<body>
    <?php
        include 'menu.php';
        include 'conexao.php';
        if(isset($_GET['pais_id']))
        {
            $pais_id = $_GET['pais_id'];
            $query = "SELECT pais_id,pais FROM pais WHERE pais_id = $pais_id ";
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
    <h1>Alteração de País</h1><hr>
    <form name="FrmPais" method="post"  action="confalt-pais.php">
   País: <input type="text" name="pais" autofocus required value="<?php echo $linha['pais']; ?>">
   <br><br>
   <input type="submit" value="Alterar" title="Alterar">
   <input type="hidden" name="pais_id"value="<?php echo $linha['pais_id']; ?>">
</form>
</body>
</html>