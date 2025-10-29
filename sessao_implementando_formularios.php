<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Implementando formulários</title>
	<?php 
		if ($_POST){
			session_start();
			$_SESSION["nome"] = $_POST["nome"];
			$_SESSION["senha"] = $_POST["senha"];

			header("location:sessao_formularios.php");

		}
	 ?>
</head>
<body>

	<form name="logar" method="post" action="sessao_implementando_formularios.php">

	Nome: <br>
	<input type="text" name="nome"><br>
	Senha: <br>
	<input type="text" name="senha"><br>

	<br><br>

	<input type="submit" name="enviar" value="Enviar">
	

</form>

</body>
</html>