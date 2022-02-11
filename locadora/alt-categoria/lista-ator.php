<?php
include 'conexao.php';
echo "<h1>Lista de atores</h1><hr>";

$query = "SELECT ator_id, primeiro_nome, ultimo_nome, ultima_atualizacao FROM ator ORDER BY ator_id DESC";
$result = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($result))
{
     echo $linha['ator_id']."-".
     $linha['primeiro_nome']."-".
     $linha['ultimo_nome']."-".
     $linha['ultima_atualizacao'] . "
     <a href='alt-ator.php?ator_id=$linha[ator_id]'>
     Alterar
     </a>
     -<a href='exc-ator.php?ator_id=$linha[ator_id]'onclick=\"return confirm('Deseja realmente excluir:[$linha[primeiro_nome] $linha[ultimo_nome]]?');\">
     Excluir</a>
     <br>";

}
mysqeli_close($conexao);
?>