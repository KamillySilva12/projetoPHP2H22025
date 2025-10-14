<?php 

	$nome = $_POST['nome'];
	$email = $_POST['email'];

	if ($nome === "Kamis" && $email === "Kamis@gmail.com") {

		echo "Cadastro certinho, fera!";
		echo"<br/>";
		echo "Seu nome é <strong> $nome </strong> seu email é $email";
	}
	else{
		echo "<table>";
		echo "<tr>";
		echo "<td>";
		echo "<b> Tudo errado </b>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	}

 ?>