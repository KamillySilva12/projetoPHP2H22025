<?php 
function titulo(){
	echo ("Calculadora: <br/>");
}

function soma($num1, $num2){

	return ($num1 + $num2);
}

function subtracao($num1, $num2){

	return ($num1 - $num2);
}

function divisao($num1, $num2){

	return ($num1 / $num2);
}

function multiplicacao($num1, $num2){

	return ($num1 * $num2);
}



function menu(){

	echo("A calculadora realiza as seguintes operações <br />");
	echo("1- Soma <br />");
    echo("2- Subtração <br />");
    echo("3- Divisão <br />");
    echo("4- Multiplicação <br />");
    echo("5- Sair <br />");

    echo ("Digite o número da operação desejada: ");
    echo ("Digite o 1 número: ");
    echo ("Digite o 2 número: ");
}

function verificarCalculo($operacao){
	if($operacao == 1){
		nome = "Soma";
	}
	elseif($operacao == 2){
		nome = "Subtração";
	}
	elseif($operacao == 3){
		nome = "Divisão";
	}
	elseif($operacao == 4){
		nome = "Multiplicação";
	}

	return nome;
}



$valor1 = 10; $valor2 = 2;
$operacao = 1;



titulo();
menu();
echo ("Os números digitados foram $valor1 e $valor2 <br />");
$calculo = verificarCalculo();
echo("O cálculo escolhido foi: $calculo <br />");

//o cal escolhido foi
// o resultado foi


 ?>


