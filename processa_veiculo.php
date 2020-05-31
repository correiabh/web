<?php

include_once("conexao.php");


$v_nome = $_POST['v_nome'];
$placa = $_POST['placa'];
$anofabricacao = $_POST['anofabricacao'];
$valor = $_POST['valor'];
$cpf  = $_POST['cpf'];

$sql = "insert into veiculo (v_nome,placa,anofabricacao,valor,cpf) values ('$v_nome','$placa','$anofabricacao','$valor','$cpf')";


$salvar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);

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
			<h1> Confirmação de Cadastro Cliente</h1>
			<hr><br><br>
			
			<?php
			
			if($linhas == 1){
				print"Cadastro efetuado com sucesso!";
			}else{
				print"Erro Não cadastrado";
			}
			
			?>
			
		</section>
		</div>
	</body>
	
</html>