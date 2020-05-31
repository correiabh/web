 <?php

include_once("conexao.php");


$sql = "select v_nome,placa,anofabricacao,valor, COUNT(id_sinistro) as batida from veiculo vc LEFT JOIN sinistro sn on sn.id_veiculo = vc.id_veiculo GROUP by vc.id_veiculo";

$consulta = mysqli_query ($conexao,$sql);
$registros = mysqli_num_rows ($consulta);

mysqli_close($conexao);
?>


<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SISTEMA DE CADASTRO </title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
		<div class="container">
		<nav>
			<ul class="menu">
				<a href="index.php"<li>Cadastra Cliente</li></a>
				<br><br>
				<a href="veiculo.php"<li>Cadastrar Veiculo</li></a>
				<br><br>
				<a href="sinistro.php"<li>Cadastra Sinistro</li></a>
				<br><br>
				<a href="consultas.php"<li>Consultas</li></a>
		</nav>
		<section>
			<h1> Consulta</h1>
			<hr><br><br>
			
			<form method="get" action="">
			</form>
			
			<?php
			
			
			
			print "$registros registros encontrados.";
			print"<br><br>";
			
			//REPETIÇÃO
			while($exibirRegistro = mysqli_fetch_array($consulta)){
			$codigo = $exibirRegistro[0];
			$nome = $exibirRegistro[1];
			$cpf = $exibirRegistro [2];
			$endereco = $exibirRegistro [3];
			$telefone = $exibirRegistro [4];
			
			print "<article>";
			
			print"$codigo <br>";
			print"$nome <br>";
			print"$cpf <br>";
			print"$telefone <br>";
			
			print "</article>";
				
			}
			
			
			?>
			
		</section>
		</div>
	</body>
	
</html>