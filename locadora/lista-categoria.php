<?php
include 'conexao.php';
echo "<h1>Lista de Categoria</h1><hr>";

$query = "SELECT categoria_id, nome, ultima_atualizacao FROM categoria ORDER BY categoria_id DESC";
$result = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($result))
{
     echo $linha['categoria_id']."-".
     $linha['nome']."-".
     $linha['ultima_atualizacao'] . "
     <a href='alt-categoria.php?categoria_id=$linha[categoria_id]'>
     Alterar
     </a>
     -<a href='exc-categoria.php?categoria_id=$linha[categoria_id]'onclick=\"return confirm('Deseja realmente excluir:$linha[nome]?');\">
     Excluir</a>
     <br>";

}
mysqeli_close($conexao);
?>