<?php
include 'conexao.php';
echo "<h1>Lista de Países</h1><hr>";

$query = "SELECT pais_id, pais, ultima_atualizacao FROM pais ORDER BY pais_id DESC";
$result = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($result))
{
     echo $linha['pais_id']."-".
     $linha['pais']."-".
     $linha['ultima_atualizacao'] . "
     <a href='alt-pais.php?pais_id=$linha[pais_id]'>
     Alterar
     </a>
     -<a href='exc-pais.php?pais_id=$linha[pais_id]'onclick=\"return confirm('Deseja realmente excluir:$linha[pais]?');\">
     Excluir</a>
     <br>";

}
mysqeli_close($conexao);
?>