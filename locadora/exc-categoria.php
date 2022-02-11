<?php
include 'conexao.php';
$categoria_id = $_GET['categoria_id'];
$query = "DELETE FROM categoria WHERE categoria_id=$categoria_id";
$result = mysqli_query($conexao,$query);
if($result)
{
    echo "categoria de codigo: $categoria_id foi deletado ";
}

else
{
    echo "A categoria não pode ser deletada".mysqli_error($conexao);
}
mysqeli_close($conexao);
?>

