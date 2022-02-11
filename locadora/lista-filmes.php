<?php

//comentário
include 'conexao.php';
echo "<h1>Lista de Filmes</h1><hr>";

$query = "SELECT filme_id, titulo, descricao FROM filme ORDER BY filme_id DESC";
$result = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($result))
{
     echo $linha['filme_id']."-".
     $linha['titulo']."-".
     $linha['descricao'] . "
     <a href='alt-filme.php?filme_id=$linha[filme_id]'>
     Alterar
     </a>
     -<a href='exc-filme.php?filme_id=$linha[filme_id]'onclick=\"return confirm('Deseja realmente excluir:$linha[titulo]?');\">
     Excluir</a>
     <br>";

}
mysqeli_close($conexao);
?>