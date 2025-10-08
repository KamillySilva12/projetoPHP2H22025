<?php 
$cadastro = [
	['nome' => 'Kamilly', 'cidade' => 'São Paulo', 'idade' => 19, 'sexo' => 'F'],
	['nome' => 'Marcelly', 'cidade' => 'Santos', 'idade' => 21, 'sexo' => 'F'],
	['nome' => 'Gabriela', 'cidade' => 'São Paulo', 'idade' => 19, 'sexo' => 'F'],
	['nome' => 'Geovanna', 'cidade' => 'São Paulo', 'idade' => 18, 'sexo' => 'F'],
	['nome' => 'Luana', 'cidade' => 'São Paulo', 'idade' => 17, 'sexo' => 'F'],

	['nome' => 'Luan', 'cidade' => 'São Paulo', 'idade' => 19, 'sexo' => 'M'],
	['nome' => 'João', 'cidade' => 'Santos', 'idade' => 17, 'sexo' => 'M'],
	['nome' => 'Wilson', 'cidade' => 'São Paulo', 'idade' => 20, 'sexo' => 'M'],
	['nome' => 'Lucas', 'cidade' => 'São Paulo', 'idade' => 22, 'sexo' => 'M'],
	['nome' => 'Marcos', 'cidade' => 'Santos', 'idade' => 18, 'sexo' => 'M']
];

$contMasc = 0;

echo"RESULTADO: <br/>";

// Nomes e idades 
foreach ($cadastro as $pessoa) {
	echo "- Nome: {$pessoa['nome']} e Idade: {$pessoa['idade']} <br/>";
}

echo"<br/>";

// Tds em santos
echo"PESSOAS QUE MORAM EM SANTOS: <br/>";
foreach ($cadastro as $pessoa) {
	if ($pessoa['cidade'] === 'Santos') {
		echo "- Nome: {$pessoa['nome']} <br/>";
	}
}
echo"<br/>";

// Maiores de 18
echo"PESSOAS MAIORES DE 18 ANOS: <br/>";
foreach ($cadastro as $pessoa) {
	if ($pessoa['idade'] >= 18) {
		echo "- Nome: {$pessoa['nome']} <br/>";
	}
}

// Contagem de homens

foreach ($cadastro as $pessoa) {
	if ($pessoa['sexo'] === 'M') {
		$contMasc++;
	}
}

echo"<br/>";

echo"CONTAGEM DE HOMENS: $contMasc <br/>";



 ?>