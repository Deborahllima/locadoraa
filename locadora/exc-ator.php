<?php
include 'conexao.php';
$ator_id = $_GET['ator_id'];
$query = "DELETE FROM ator WHERE ator_id=$ator_id";
$result = mysqli_query($conexao,$query);
if($result)
{
    echo "O ator de codigo: $ator_id foi deletado ";
}

else
{
    echo "O ator não pôde ser deletado".mysqli_error($conexao);
}
mysqeli_close($conexao);
?>