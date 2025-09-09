<?php 
// Construir um app em PHP que leia 2 números e efetue a soma
// a. Caso o valor somado seja maior que 20, este deverá ser apresentando somandose a ele mais 8;
// b. Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5

//Funções

function soma($num1,$num2){
	return $num1 + $num2;
}

// quais são os numeros
$numero1 = 20;
$numero2 = 20;

//Informar pro usuário que irá ser feito a soma
echo "Os números digitados serão somados<br />";

//Fazer a soma
$resultado = soma($numero1,$numero2);

// Ver se o resultado é menor ou igual a 20
if ($resultado <= 20){
	echo"O resultado da soma do $numero1 e $numero2 - 5 é igual a:  " .$resultado - 5.;
}
// Se o resultado for maior que 20 
else {
	echo"O resultado da soma do $numero1 e $numero2 + 8 é igual a:  " .$resultado + 8.;
}


 ?>