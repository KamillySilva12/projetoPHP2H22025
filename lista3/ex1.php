<?php 
//criar um sistema em php que calcule as somas das matrizes
$matriz_a = array(
     array (25, 12, 35),
     array (85, 47, 98),
     array (32, 38, 105));

$matriz_b = array(
     array (98, 65, 35),
     array (5, 27, 8),
     array (74, 14, 3));
$matriz_c = array(
     array (),
     array (),
     array ());

for ($linha=0;$linha<3;$linha++) {
for ($coluna=0;$coluna<3;$coluna++) {
	echo $matriz_a[$linha][$coluna]." ";
	echo $matriz_b[$linha][$coluna]." ";
	 
	 $soma = $soma + $matriz_a + $matriz_b;

	 echo ($soma);
	 
	

   }
   echo"<br/>";
}

 ?>