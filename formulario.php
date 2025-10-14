<DOCTYPE html>
	<html>
	<head>

		 <meta charset="UTF-8">
    	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

   		 <title>Forms</title>
	</head>
	<body>
		<h1>Formulário de cadastro</h1>
		<form action="cadastrar.php" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome">
			<br><br>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email">
			<br><br>
			<input type="submit" name="Enviar">
			<button type="submit">Cadastrar</button>
		</form>
		<br><br>
	</body>
	</html>