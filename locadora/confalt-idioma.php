<?php

include 'menu.php';

if(isset($_POST['idioma_id'])&& 
    isset($_POST['nome']))
{   
    $idioma_id = $_POST['idioma_id'];
    $nome = $_POST['nome'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $databr = date('d/m/Y H:i:s');
    echo "O idioma atual é: $nome<br>";
    include 'conexao.php';
    $query = "UPDATE idioma SET nome='$nome', ultima_atualizacao= '$data' WHERE idioma_id=$idioma_id";
    //echo $query
    $resultado = mysqli_query($conexao,$query);
//NOW pega a data e a hora e retorna

if($resultado)
{   
    echo "O idioma: $nome foi alterado com sucesso!";
}
else
{  
    echo "O idioma não pode ser alterado!";
    mysqli_error($conexao);

}
mysqeli_close($conexao);
}
?> 