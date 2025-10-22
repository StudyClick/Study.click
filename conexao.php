<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "studyclick";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexao com o BD. ". mysqli_connect_error($conexao));
}



?>