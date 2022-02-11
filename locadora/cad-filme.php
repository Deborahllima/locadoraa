<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Cadastro de Filmes</title>
    <?php
    include 'menu.php';
    ?>
</head>
<body>
    <h1>Cadastro de Filmes</h1><hr>
    <form name="FrmFilme" method="post"  action="">
   Título: <input type="text" name="titulo" autofocus required><br><br>
   Descrição:<br><textarea cols="20" rows="5" name="descricao"></textarea><br><br>
   Ano de Lançamento: <input type="number" name="ano_de_lancamento"><br><br>
   <!-- a tag select cria uma lista de opções -->
   Idioma:<select name="idioma_id">
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
    Duração da Locação: <input type="number" name="duracao_da_locacao" required><br><br>
    Preço da Locação: <input type="number" name="preco_da_locacao" required><br><br>
    Duração do Filme: <input type="number" name="duracao_do_filme"><br><br>
    Custo de Substituição: <input type="number" name="custo_de_substituicao" required><br><br>
    Classificação: <select name="classificacao">
        <option value="" selected>Selecione a classificação</option>
        <option value="G">G</option>
        <option value="pg">PG</option>
        <option value="PG-13">PG-13</option>
        <option value="R">R</option>
        <option value="NC-17">NC-17</option>   
        </select> 
         <br><br>
    Recursos Especiais: <input type="text" name="recursos_especiais" size="100"><br><br>
    Data: <input type="datetime-local" name="data" required><br><br>
   <input type="submit" name="Enviar">
</form>
</body>
</html>

<?php

if(!empty($_POST))
{
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$ano_de_lancamento = $_POST['ano_de_lancamento'];
$idioma_id = $_POST['idioma_id'];
$idioma_original_id = $_POST['idioma_original_id'];
$duracao_da_locacao = $_POST['duracao_da_locacao'];
$preco_da_locacao = $_POST['preco_da_locacao'];
$duracao_do_filme = $_POST['duracao_do_filme'];
$custo_de_substituicao = $_POST['custo_de_substituicao'];
$classificacao = $_POST['classificacao'];
$recursos_especiais = $_POST['recursos_especiais'];
$data = $_POST['data'];
include 'conexao.php';
$query = "INSERT INTO filme VALUES(null,'$titulo','$descricao','$ano_de_lancamento','$idioma_id','$idioma_original_id','$duracao_da_locacao','$preco_da_locacao','$duracao_do_filme','$custo_de_substituicao','$classificacao','$recursos_especiais','$data')";
$resultado = mysqli_query($conexao, $query);

if($resultado)
{
    echo "Filme cadastrado com sucesso!";
}

else{
        echo "Erro ao cadastrar".mysqli_error($conexao);

}
}

include 'conexao.php';
include 'lista-filmes.php';
?>
