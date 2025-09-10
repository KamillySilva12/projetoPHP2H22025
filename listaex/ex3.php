<?php 
// Criar um aplicativo em PHP que possibilite entrar com nome, sexo e idade de uma pessoa.
// a. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA.
// b. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

$nome = "Kamilly";
$sexo = "F";
$idade = 18;

// Ver se a pessoa é do sexo feminino e tem menos de 25 anos

if ($sexo == "F" && $idade < 25){
	echo "$nome está ACEITA";
} else {
	echo "$nome NÃO FOI ACEITA";
}

 ?>