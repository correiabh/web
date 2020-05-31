<?php

include_once("conexao.php");


$dia = $_POST['dia'];
$observacao  = $_POST['observacao'];
$cpf = $_POST['cpf'];
$id_veiculo = $_POST['id_veiculo'];


$sql = "insert into sinistro (dia,observacao,cpf,id_veiculo) values ('$dia','$observacao','$cpf','$id_veiculo')";


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
				print "Erro Não cadastrado";
			}
			
			?>
			
		</section>
		</div>
	</body>
	
</html>