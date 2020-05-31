
<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "seguradora";
$conexao = mysqli_connect($hostname,$user,$password,$database);


if(!$conexao)(
	print "Falha na concexão com banco de dados"
)
?>