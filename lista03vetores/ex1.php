<?php 

//media e nome do aluno com maior nota

$alunos = [
      ['nome' => 'Marcelly', 'nota' => 8.0],
      ['nome' => 'Kamilly', 'nota' => 10.0],
      ['nome' => 'Victor', 'nota' => 9.9],
      ['nome' => 'Alexandre', 'nota' => 8.0],
      ['nome' => 'Wilson', 'nota' => 3.0],
      ['nome' => 'João', 'nota' => 7.5],
      ['nome' => 'Lucas', 'nota' => 5.0],
      ['nome' => 'Carla', 'nota' => 2.0],
      ['nome' => 'Bruno', 'nota' => 9.0],
      ['nome' => 'Laércio', 'nota' => 8.6]  
];

$somaNotas = 0;
$maiorNota = -1;
$alunoMaiorNota = '';
$totalAlunos = count($alunos);

foreach ($alunos as $aluno) {
      $somaNotas += $aluno['nota'];

      if ($aluno['nota'] > $maiorNota) {
            $maiorNota = $aluno['nota'];
            $alunoMaiorNota = $aluno['nome'];
      }
}

//média

$mediaSala = $somaNotas / $totalAlunos;

echo"A média de notas da sala é: $mediaSala \n";
echo "<br/>";
echo"A maior nota da sala é $maiorNota e o nome do aluno é $alunoMaiorNota \n";


 ?>