<?php  

//entre com 10 números e armazene em um array
$num = [0, 1, 12, 5, -7, 9, -2, 4, 20, 13];

$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

//contar quantos negativos e positivos
for ($i=0; $i < 10; $i++) { 
	if ($num[$i] < 0) {
		$negativos++;
	}
	elseif ($num[$i] > 0) {
		$positivos++;
	}
	
}
//contar quantos são pares
for ($i=0; $i < 10; $i++) { 
	if ($num[$i] % 2 == 0) {
		$pares++;
	}
	else{
		$impares++;
	}
}

echo"O TOTAL DE NÚMEROS NEGATIVOS SÃO: $negativos <br/>";
echo"O TOTAL DE NÚMEROS POSITIVOS SÃO: $positivos <br/>";
echo"O TOTAL DE NÚMEROS IMPARES SÃO: $impares <br/>";
echo"O TOTAL DE NÚMEROS PARES SÃO: $pares <br/>";





?>