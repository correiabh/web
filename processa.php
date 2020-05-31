<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "insert into cliente (nome,cpf,endereco,telefone) values ('$nome','$cpf','$endereco','$telefone')";

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
				print"Cadastro Não efetuado.<br>Já 	Existeum cliente com esse nome";
			}
			
			?>
			
		</section>
		</div>
	</body>
	
</html>