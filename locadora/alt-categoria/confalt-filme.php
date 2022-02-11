<?php

include 'menu.php';

if(isset($_POST['filme_id'])&& 
    isset($_POST['nome']))
{   
    $filme_id = $_POST['filme_id'];
    $titulo = $_POST['titulo'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $databr = date('d/m/Y H:i:s');
    echo "A data atual é: $databr<br>";
    include 'conexao.php';
    $query = "UPDATE filme SET nome='$nome', ultima_atualizacao= '$data' WHERE filme_id=$filme_id";
    //echo $query
    $resultado = mysqli_query($conexao,$query);
//NOW pega a data e a hora e retorna

if($resultado)
{   
    echo "O filme: $nome foi alterado com sucesso!";
}
else
{  
    echo "O filme não pode ser alterado!";
    mysqli_error($conexao);

}
mysqeli_close($conexao);
}
?>