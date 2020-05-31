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
			<h1>Cadastro Sinistro</h1>
			<hr>
			
			<form method="post" action ="processa_sinistro.php">
				
				
				Dia<br>
				<input type="dia" name="dia" class="campo" maxlength="40" required autofocus><br>
				observacao: <br> 
				<input type="observacao" name="observacao" class="campo" maxlength="100" required ><br>
				CPF do Associado<br>
				<input type="cpf" name="cpf" class="campo" maxlength="40" required autofocus><br>
				Placa do Veiculo Associado<br> 
				<input type="id_veiculo" name="id_veiculo" class="campo" maxlength="40" required ><br>
				<br><br>
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				<br><br>
				
			</form>
		</section>
		</div>
	</body>
	
</html>