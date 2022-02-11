<?php

include 'menu.php';

if(isset($_POST['ator_id'])&& 
    isset($_POST['nome']))
{   
    $ator_id = $_POST['ator_id'];
    $nome = $_POST['nome'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $databr = date('d/m/Y H:i:s');
    echo "O ator atual é: $nome<br>";
    include 'conexao.php';
    $query = "UPDATE ator SET primeiro_nome='$primeiro_nome', ultimo_nome='$ultimo_nome', ultima_atualizacao='$ultima_atualizacao' WHERE ator_id=$ator_id";
    //echo $query
    $resultado = mysqli_query($conexao,$query);
//NOW pega a data e a hora e retorna

if($resultado)
{   
    echo "O ator: $nome foi alterado com sucesso!";
}
else
{  
    echo "O ator não pode ser alterado!";
    mysqli_error($conexao);

}
mysqeli_close($conexao);
}
?> 