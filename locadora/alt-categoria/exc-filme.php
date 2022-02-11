<?php
include 'conexao.php';
$filme_id = $_GET['filme_id'];
$query = "DELETE FROM filme WHERE filme_id=$filme_id";
$result = mysqli_query($conexao,$query);
if($result)
{
    echo "Filme de codigo: $filme_id foi deletado ";
}

else
{
    echo "O Filme não pode ser deletado".mysqli_error($conexao);
}
mysqeli_close($conexao);
?>