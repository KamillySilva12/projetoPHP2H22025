<?php 

if (isset($_POST['nenhum'])){
	echo "Você escolheu nenhum";
	echo "<br/>";
} 

if (isset($_POST['cachorro'])){
	echo "Você escolheu cachorro";
	echo "<br/>";
}

if (isset($_POST['gato'])){
	echo "Você escolheu gato";
	echo "<br/>";
}

if (isset($_POST['peixe'])){
	echo "Você escolheu peixe";
	echo "<br/>";
} 

if (isset($_POST['passaro'])){
	echo "Você escolheu pássaro";
	echo "<br/>";
} 


if (isset($_POST['estado_civil'])){
	echo "Você está " . $_POST['estado_civil'];
	echo "<br/>";

}





 ?>