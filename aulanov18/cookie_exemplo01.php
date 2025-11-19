<!DOCTYPE html>
<html>
<head>
	<title>Testando se o cookie foi definido</title>
</head>
<body>
<?php 

	if (isset($_COOKIE['usuario'])){
		echo "Bem vindo".$_COOKIE["usuario"]."! <br>";
	}
	else{

		echo"Usuário novo, seja bem vindo!<br>";
	}
 ?>
 </body>
 </html>	