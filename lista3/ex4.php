<?php 

$meses = [
	0 => null,
	1 => 'Janeiro',
	2 => 'Fevereiro',
	3 => 'Março',
	4 => 'Abril',
	5 => 'Maio',
	6 => 'Junho',
	7 => 'Julho',
	8 => 'Agosto',
	9 => 'Setembro',
	10 => 'Outubro',
	11 => 'Novembro',
	12 => 'Dezembro',
];

$numMes = 10;

if ($numMes >= 1 && $numMes <= 12){

	echo "O nome do mês de número $numMes é $meses[$numMes]";

}

 ?>
