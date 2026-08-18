<?php
// Dados de entrada do aluno
$media = 7.5;
$faltas = 12;

// Exibição dos dados na tela
echo "Média Final: " . number_format($media, 1, ',', '.') . "<br>";
echo "Total de Faltas: " . $faltas . "<br><br>";

// Verificação utilizando o operador lógico &&
if ($media >= 6.0 && $faltas <= 15) {
    echo "<b>Situação: Aluno Aprovado!</b>";
} else {
    echo "<b>Situação: Aluno Reprovado!</b>";
}
?>
