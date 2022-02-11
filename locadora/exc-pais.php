<?php
include 'conexao.php';
$pais_id = $_GET['pais_id'];
$query = "DELETE FROM pais WHERE pais_id=$pais_id";
$result = mysqli_query($conexao,$query);
if($result)
{
    echo "O país de codigo: $pais_id foi deletado ";
}

else
{
    echo "O país não pode ser deletado".mysqli_error($conexao);
}
mysqeli_close($conexao);
?>

