<?php

$usuario = "root";
$senha = "";
$host = "localhost";
$banco = "locadora";

$conexao = mysqli_connect($host,$usuario,$senha)
or die (mysqli_error($conexao));

mysqli_select_db($conexao, $banco);

?>