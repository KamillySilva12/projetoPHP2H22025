<?php 

//funções

function soma($num1,$num2){
	return $num1 + $num2;
}

function subtracao($num1, $num2){
	return $num1 - $num2;
}

function divisao($num1, $num2){
	// Verificar se o divisor é 0
	if ($num2 == 0){
		return false;
	}
	return $num1 / $num2;
}

function multiplicacao($num1, $num2){
	return $num1 * $num2;
}

function exibirMenu(){
	echo "Calculadora <br /> <br />";
	echo "Digite o número da operação desejada: <br /> <br />";
	echo"1 - Soma <br />";
	echo"2 - Subtração  <br />";
	echo"3 - Divisão <br />";
	echo"4 - Multiplicação <br /> <br />";
}

//Início do código

exibirMenu();

$numero1 = 20;
$numero2 = 0;
$operacao = 3;

switch ($operacao) {
	case '1':
		$resultado = soma($numero1, $numero2);
		$nome_operacao = "Soma";
		break;
	case '2':
		$resultado = subtracao($numero1, $numero2);
		$nome_operacao = "Subtração";
		break;
	case '3':
		$resultado = divisao($numero1, $numero2);
		$nome_operacao = "Divisâo";
		break;
	case '4':
		$resultado = multiplicacao($numero1, $numero2);
		$nome_operacao = "Multiplicação";
		break;
	
	default:
		echo "ERRO: Operação inválida";
		break;
}

//se o resultado  for um resultado falso, então mostre o motivo
if ($resultado !== false){
	echo "O resultado da $nome_operacao entre $numero1 e $numero2 é: $resultado";
}
else{

	echo "ERRO: Não é possível dividir por 0";
}


 ?>




