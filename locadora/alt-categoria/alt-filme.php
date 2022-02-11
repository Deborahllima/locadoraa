<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Alteração de Filmes</title>
</head>
<body>
<?php
        include 'menu.php';
        include 'conexao.php';
        if(isset($_GET['filme_id']))
        {
            $filme_id = $_GET['filme_id'];
            $query = "SELECT * FROM filme WHERE filme_id = $filme_id ";
            $resultado = mysqli_query($conexao,$query);
            $linha_filme = mysqli_fetch_array($resultado);
        }
       else
       {
              header('Location: http://localhost/locadora/erro.php'); 
              exit;
              mysqeli_close($conexao)
       }
    ?>

    <h1>Alteração de Filmes</h1><hr>
    <form name="FrmFilme" method="post"  action="">
   Título: <input type="text" name="titulo" autofocus required value="<?php echo  $linha_filme['titulo'];?>"><br><br>
   Descrição:<br><textarea cols="20" rows="5" name="descricao"> <?php echo  $linha_filme['descricao'];?></textarea><br><br>
   Ano de Lançamento: <input type="number" name="ano_de_lancamento" value="<?php echo  $linha_filme['ano_de_lancamento'];?>"><br><br>
   <!-- a tag select cria uma lista de opções -->
   Idioma:<select name="idioma_id">
       <option value="" selected>Selecione um idioma</option>
    <?php
          include 'conexao.php';
          $query = "SELECT idioma_id, nome FROM idioma";
          $resultado = mysqli_query($conexao,$query);
          while($linha = mysqli_fetch_array($resultado))
          {
            if($linhafilme['idioma_id'] == $linha['idioma_id'])  
            {
                $selected = "selected";
            }
            else
            {
                $selected = "";
            }
            echo "<option value='$linha[idioma_id]'>
              $linha[nome]</option>";
          }

    ?>
    </select><br><br>

    Idioma Original:<select name="idioma_original_id">
    <option value="" selected>Selecione um idioma</option>
    <?php
          include 'conexao.php';
          $query = "SELECT idioma_id, nome FROM idioma";
          $resultado = mysqli_query($conexao,$query);
          while($linha = mysqli_fetch_array($resultado))
          {
              echo "<option value='$linha[idioma_id]'>
              $linha[nome]</option>";
          }

    ?>
    </select><br><br>
    Duração da Locação: <input type="number" name="duracao_da_locacao" required value="<?php echo  $linha_filme['duracao_da_locacao'];?>"><br><br>
    Preço da Locação: <input type="number" name="preco_da_locacao" required value="<?php echo  $linha_filme['preco_da_locacao'];?>"><br><br>
    Duração do Filme: <input type="number" name="duracao_do_filme" value="<?php echo  $linha_filme['duracao_do_filme'];?>"><br><br>
    Custo de Substituição: <input type="number" name="custo_de_substituicao" required value="<?php echo  $linha_filme['custo_de_substituicao'];?>"><br><br>
    Classificação: <select name="classificacao">
        <option value="" selected>Selecione a classificação</option>
        <option value="G" selected>G</option>
        <option value="pg" selected>PG</option>
        <option value="PG-13" selected>PG-13</option>
        <option value="R" selected>R</option>
        <option value="NC-17" selected>NC-17</option>   
        </select><br><br>
    Recursos Especiais: <input type="text" name="recursos_especiais" value="<?php echo  $linha_filme['recursos_especiais'];?>"><br><br>
    Data: <input type="datetime-local" name="data" required value="<?php echo  $linha_filme['ultima_atualizacao'];?>"><br><br>
   <input type="submit" name="Enviar">
</form>
</body>
</html>

