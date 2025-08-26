<?php 
function titulo(){
	echo ("Calculando valores: <br/>");
}


function somaValor($num1, $num2){
	$resp = $num1 + $num2;
	echo("A soma de $num1 com $num2 é: $resp");
}
$valor1 = 10; $valor2 = 10;

//executar ou chamar função
titulo();
somaValor($valor1,$valor2);

 ?>
