<?php 
// criar um sistema em php que calcule as somas das matrizes
$matriz_a = [
      [25, 12, 35],
      [85, 47, 98],
      [32, 38, 105]
];

$matriz_b = [
      [98, 65, 35],
      [5, 27, 8],
      [74, 14, 3]];

$matriz_c = [];

for ($linha=0; $linha < 3; $linha++) { 
     $matriz_c[$linha] = [];

     for ($coluna=0; $coluna < 3 ; $coluna++) { 
          $matriz_c[$linha][$coluna] = $matriz_a[$linha][$coluna] + $matriz_b[$linha][$coluna];
     }
     
}

echo "RESULTADO: <br/>";

foreach ($matriz_c as $resultado) {
     echo " | " . implode(" | ", $resultado) . "| <br/> " ;

}

 ?>