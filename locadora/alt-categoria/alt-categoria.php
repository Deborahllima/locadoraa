<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Alteração de Categorias</title>
</head>
<body>
    <?php
        include 'menu.php';
        include 'conexao.php';
        if(isset($_GET['categoria_id']))
        {
            $categoria_id = $_GET['categoria_id'];
            $query = "SELECT categoria_id,nome FROM categoria WHERE categoria_id = $categoria_id ";
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
    <h1>Alteração de Categorias</h1><hr>
    <form name="FrmCategoria" method="post"  action="confalt-categoria.php">
   Nome: <input type="text" name="nome" autofocus required value="<?php echo $linha['nome']; ?>">
   <br><br>
   <input type="submit" value="Alterar" title="Alterar">
   <input type="hidden" name="categoria_id"value="<?php echo $linha['categoria_id']; ?>">
</form>
</body>
</html>