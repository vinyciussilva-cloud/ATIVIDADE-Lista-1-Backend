<?php
// Define o valor da compra
$valorCompra = 250.00; 

// Define o valor mínimo para o desconto
$valorMinimoDesconto = 200.00;

// Inicializa o valor final com o valor original
$valorFinal = $valorCompra;

// Verifica se a compra atinge o valor mínimo
if ($valorCompra >= $valorMinimoDesconto) {
    // Calcula 10% de desconto
    $desconto = $valorCompra * 0.10; 
    $valorFinal = $valorCompra - $desconto;
    echo "Desconto aplicado de 10%!<br>";
} else {
    echo "Valor mínimo não atingido para o desconto.<br>";
}

// Exibe os resultados formatados
echo "Valor original: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
echo "Valor a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
?>