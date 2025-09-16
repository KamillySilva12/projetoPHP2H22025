<?php

$entrada = 0;
$maior = 0;

echo "Insira números aleatórios para que o sistema informe o maior entre eles. Digite 0 para parar <br/>";
while ($entrada != 0) {
	echo "Digite um número: <br/>";
	if ($entrada > $maior){
		$maior = $entrada;
	}
}

echo"Saiu do loop";
?>