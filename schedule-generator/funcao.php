<?php
function conectar(){
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_dados = "schedule-generator";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_dados);
return $conexao;
}
?>