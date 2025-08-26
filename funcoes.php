<?php 
function titulo(){
	echo ("Calculando valores: <br/>");
}


function somaValor($num1, $num2){

	return ($num1 + $num2);
}

$valor1 = 10; $valor2 = 20;

//executar ou chamar função
titulo();
$resposta = somaValor($valor1, $valor2);
echo("A soma de $valor1 e $valor2 é: $resposta");
 
$somando = somaValor(30,40) + somaValor(50,60);

echo ("<br /> $somando");
 ?>


