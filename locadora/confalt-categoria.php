<?php

include 'menu.php';

if(isset($_POST['categoria_id'])&& 
    isset($_POST['nome']))
{   
    $categoria_id = $_POST['categoria_id'];
    $nome = $_POST['nome'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $databr = date('d/m/Y H:i:s');
    echo "A data atual é: $databr<br>";
    include 'conexao.php';
    $query = "UPDATE categoria SET nome='$nome', ultima_atualizacao= '$data' WHERE categoria_id=$categoria_id";
    //echo $query
    $resultado = mysqli_query($conexao,$query);
//NOW pega a data e a hora e retorna

if($resultado)
{   
    echo "A categoria: $nome foi alterada com sucesso!";
}
else
{  
    echo "A categoria não pode ser alterada!";
    mysqli_error($conexao);

}
mysqeli_close($conexao);
}
?>