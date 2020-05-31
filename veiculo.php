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
			<h1>Cadastro Veiculo</h1>
			<hr>
			
			<form method="post" action ="processa_veiculo.php">
				
				Nome<br>
				<input type="v_nome" name="v_nome" class="campo" maxlength="40" required autofocus><br>
				Placa <br> 
				<input type="placa" name="placa" class="campo" maxlength="40" required ><br>
				Ano de Fabricação<br>
				<input type="anofabricacao" name="anofabricacao" class="campo" maxlength="40" required autofocus><br>
				Valor<br> 
				<input type="valor" name="valor" class="campo" maxlength="40" required ><br>
				CPF Do Cliente<br> 
				<input type="cpf" name="cpf" class="campo" maxlength="40" required ><br>
				<br><br>
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				
			</form>
		</section>
		</div>
	</body>
	
</html>