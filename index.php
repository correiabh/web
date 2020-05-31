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
			<h1>Cadastro Cliente</h1>
			<hr>
			
			<form method="post" action ="processa.php">

				Nome<br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
				CPF <br> 
				<input type="cpf" name="cpf" class="campo" maxlength="40" required ><br>
				Endereço<br>
				<input type="endereco" name="endereco" class="campo" maxlength="40" required autofocus><br>
				Telefone<br> 
				<input type="telefone" name="telefone" class="campo" maxlength="40" required ><br>
				<br><br>
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				<br><br>
				
			</form>
		</section>
		</div>
	</body>
	
</html>