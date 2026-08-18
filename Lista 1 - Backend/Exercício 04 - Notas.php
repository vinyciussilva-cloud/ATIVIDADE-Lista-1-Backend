<?php
// Vetor com 5 notas
$notas = [8.5, 7.0, 9.5, 6.5, 8.0];

$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

echo "<h2>Notas da Turma</h2>";

foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

$media = $soma / count($notas);

echo "Média da turma: " . number_format($media, 2, ',', '.') . "<br>";

echo "<h2>Maior e Menor Notas</h2>";

echo "Maior nota: " . $maior . "<br>";
echo "Menor nota: " . $menor;
?>
