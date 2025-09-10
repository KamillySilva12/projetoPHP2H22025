<?php 
// Criar um aplicativo em PHP entrar com um número e informar
// a. se ele é divisível por 10, por 5, por 2 ou
// b. se não é divisível por nenhum destes

// Informar o número
$numero = 2;

echo "O número escolhido foi $numero <br />";

// Verificar se o numero é divisível por 10
if ($numero % 10 == 0){
	echo "$numero é divisível por 10 <br />";

}
// Verificar se o numero é divisível por 5
if ($numero % 5 == 0){
	echo "$numero é divisível por 5 <br />";
}
// Verificar se o numero é divisível por 2
if ($numero % 2 == 0){
	echo "$numero é divisível por 2 <br />";
}
// senão, n é divisivel por nenhum deles
if ($numero % 10 != 0 && $numero % 5 != 0 && $numero % 2 != 0){
	echo "<br /> $numero não é divisível por 10, 5 e 2";
}
 ?>
