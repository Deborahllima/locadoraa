<?php

include 'menu.php';

if(isset($_POST['pais_id'])&& 
    isset($_POST['pais']))
{   
    $pais_id = $_POST['pais_id'];
    $pais = $_POST['pais'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $databr = date('d/m/Y H:i:s');
    echo "A data atual é: $databr<br>";
    include 'conexao.php';
    $query = "UPDATE pais SET pais='$pais', ultima_atualizacao= '$data' WHERE pais_id=$pais_id";
    //echo $query
    $resultado = mysqli_query($conexao,$query);
//NOW pega a data e a hora e retorna

if($resultado)
{   
    echo "O pais: $pais foi alterado com sucesso!";
}
else
{  
    echo "O pais não pode ser alterado!";
    mysqli_error($conexao);

}
mysqeli_close($conexao);
}
?>