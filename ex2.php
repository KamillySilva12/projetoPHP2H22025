<?php
echo"Digite o seu salário bruto: <br />";

$salario_bruto = 10000;
$desconto_inss = descontoInss($salario_bruto);
$aliquota = aliquota($salario_bruto);
$desconto_ir = descontoIr($salario_bruto, $aliquota);

//Mostrar salário bruto
echo "Salário bruto: R$ $salario_bruto <br />";

echo"Desconto do INSS: R$ " .$desconto_inss. "<br />";

echo"Desconto do IR: R$ " .$desconto_ir. "<br />";

echo"Salário líquido: R$ " .$salario_bruto - ($desconto_inss + $desconto_ir)."<br />";

function descontoInss($salario){
	return $salario * (14/100);
}

function descontoIr($salario, $porcentagem){
	return $salario * ($porcentagem/100);
}

function aliquota($salario){
	if ($salario <= 0){
		return false;
	}else if ($salario <= 2259.20){
		return 0;
	}
	else if ($salario >= 2259.21 && $salario <= 2826.65){
		return 7.5 / 100;
	}else if ($salario >= 2826.66 && $salario <= 3751.05){
		return 15 / 100;
	}else if ($salario >= 3751.06 && $salario <= 4664.68){
		return 22.5 / 100; 
	}else{
		return 27.5 / 100;
	}
}

?>