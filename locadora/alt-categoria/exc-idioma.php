<?php
include 'conexao.php';
$idioma_id = $_GET['idioma_id'];
$query = "DELETE FROM idioma WHERE idioma_id=$idioma_id";
$result = mysqli_query($conexao,$query);
if($result)
{
    echo "O idioma de codigo: $idioma_id foi deletado ";
}

else
{
    echo "O idioma não pôde ser deletado".mysqli_error($conexao);
}
mysqeli_close($conexao);
?>