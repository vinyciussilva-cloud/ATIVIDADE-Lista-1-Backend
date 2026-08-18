<?php
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }

    return [
        'imc' => $imc,
        'classificacao' => $classificacao
    ];
}

$resultado = calcularIMC(70, 1.75);

echo "IMC: " . number_format($resultado['imc'], 2, ',', '.') . "<br>";
echo "Classificação: " . $resultado['classificacao'];
?>
