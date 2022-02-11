<?php
include 'conexao.php';
echo "<h1>Lista de idiomas</h1><hr>";

$query = "SELECT idioma_id, nome, ultima_atualizacao FROM idioma ORDER BY idioma_id DESC";
$result = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($result))
{
     echo $linha['idioma_id']."-".
     $linha['nome']."-".
     $linha['ultima_atualizacao'] . "
     <a href='alt-idioma.php?idioma_id=$linha[idioma_id]'>
     Alterar
     </a>
     -<a href='exc-idioma.php?idioma_id=$linha[idioma_id]'onclick=\"return confirm('Deseja realmente excluir:$linha[nome]?');\">
     Excluir</a>
     <br>";

}

mysqeli_close($conexao);
?>