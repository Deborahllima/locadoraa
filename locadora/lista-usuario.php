<?php


include 'conexao.php';

echo "<h1>Lista de Usuário</h1><hr>";


$query = "SELECT usuario_id, login, senha FROM usuario ORDER BY usuario_id DESC";

$result = mysqli_query($conexao, $query);


while($linha = mysqli_fetch_array($result))

{
     echo $linha['usuario_id']."-".
     $linha['login']."-".
     $linha['senha'] . "
     <a href='alt-usuario.php?usuario_id=$linha[usuario_id]'>
     Alterar
     </a>
     -<a href='exc-usuario.php?usuario_id=$linha[usuario_id]'onclick=\"return confirm('Deseja realmente excluir:$linha[login]?');\">
     Excluir</a>
     <br>";
     

}
mysqli_close($conexao);
?>