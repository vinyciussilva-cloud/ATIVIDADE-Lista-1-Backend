# 🐘 Lista 1 — Backend | PHP

## 👨‍💻 Informações Gerais

<div align="center">

| 📚 Atividade | 👨‍🎓 Aluno | 🏫 Instituição | 💻 Área |
| :--- | :--- | :--- | :--- |
| **Lista 1 — Backend** | **DENIS DOS ANJOS GERES** | SENAI "A. Jacob Lafer" | Desenvolvimento Backend |

</div>

---

## 📖 Sobre o Projeto

A **Lista 1 — Backend** reúne um conjunto de exercícios práticos desenvolvidos para consolidar o entendimento de algoritmos e arquitetura de scripts server-side utilizando **PHP**. 

O projeto cobre desde operações básicas de memória e aritmética até a componentização de código através de funções e manipulação estruturada de matrizes de dados (arrays).

> 🧠 Variáveis & Aritmética &nbsp;·&nbsp; 🔀 Estruturas Condicionais &nbsp;·&nbsp; 🔄 Laços de Repetição &nbsp;·&nbsp; 📦 Vetores Estruturados &nbsp;·&nbsp; 🛠️ Modularização (Funções)

---

## 🛠️ Stack & Tecnologias Aplicadas

<div align="center">

<table>
<tr>
<td align="center" width="25%">

**🐘 Core Language**

<img src="https://skillicons.dev" height="40"/>

PHP 8+

</td>
<td align="center" width="25%">

**⚙️ DevTools**

<img src="https://skillicons.dev" height="40"/>

Visual Studio Code

</td>
<td align="center" width="25%">

**🗂️ Versionamento**

<img src="https://skillicons.dev" height="40"/>

Git · GitHub

</td>
<td align="center" width="25%">

**🌐 Runtime Enviroment**

<img src="https://skillicons.dev" height="40"/>

Built-in Web Server

</td>
</tr>
</table>

</div>

---

## 🎯 Objetivos & Matriz de Exercícios

A atividade foi dividida em **5 desafios práticos organizados por complexidade**:

| Desafio | Exercício | Componentes Lógicos Principais | Status |
| :---: | :--- | :--- | :---: |
| **01** | 💰 Cálculo de preço e desconto | Condicionais simples, operadores matemáticos e percentuais | ✅ |
| **02** | 🎓 Verificação de aprovação | Operadores relacionais combinados com lógica booleana (`&&`) | ✅ |
| **03** | 🔢 Tabuada Automatizada | Controle de loops iterativos com indexadores (`for`) | ✅ |
| **04** | 📊 Processamento Estatístico de Notas | Estruturas de dados complexas (`arrays`), varredura linear (`foreach`) | ✅ |
| **05** | ⚖️ Cálculo e Classificação de IMC | Encapsulamento de rotinas, escopo de parâmetros e condicionais encadeadas | ✅ |

---

# 🧩 Desafios Desenvolvidos

## 01 — 💰 Cálculo de Preço com Desconto

### 📌 Descrição & Regras de Negócio
O script lê dinamicamente o valor unitário de um produto e seu volume de compra. Se o montante financeiro da transação ultrapassar o gatilho de **R$ 200,00**, uma redução de **10%** é aplicada sobre o valor final.

```text
Fórmula Base: Valor Total = Preço × Quantidade
Gatilho Condicional: Se Valor Total > 200 → Aplicar faturador (Valor Total × 0.9)
```

### 💻 Implementação
```php
<?php
// Script de processamento transacional com gatilho de desconto
$preco = 67.67;
$quantidade = 4;

$valor_total = $preco * $quantidade;

echo "O preço do produto é: R$ " . number_format($preco, 2, ',', '.') . "<br>";
echo "A quantidade comprada é: $quantidade<br><br>";
echo "O valor total bruto da compra é: R$ " . number_format($valor_total, 2, ',', '.') . "<br><br>";

if ($valor_total > 200) {
    $desconto = $valor_total * 0.1;
    $valor_desconto = $valor_total - $desconto;

    echo "Status: Elegível para desconto (Valor total superior a R$ 200,00).<br>";
    echo "Valor líquido final (10% OFF): R$ " . number_format($valor_desconto, 2, ',', '.') . "<br>";
} else {
    echo "Status: Não elegível para desconto (Valor inferior ao limite mínimo).<br>";
}
?>
```

### ✅ Log de Saída
```text
O preço do produto é: R$ 67,67
A quantidade comprada é: 4

O valor total bruto da compra é: R$ 270,68

Status: Elegível para desconto (Valor total superior a R$ 200,00).
Valor líquido final (10% OFF): R$ 243,61
```

---

## 02 — 🎓 Verificação de Aprovação Escolar

### 📌 Descrição & Regras de Negócio
Avalia o status de um estudante baseado em critérios de corte simultâneos utilizando álgebra booleana. O aluno precisa alcançar a média mínima e não estourar o limite de faltas determinado pela instituição.

```text
Critério de Aprovação: (Média Final >= 6.0) AND (Total Faltas <= 15)
```

### 💻 Implementação
```php
<?php
// Validação acadêmica por múltiplos critérios de corte
$media = 7.5;
$faltas = 12;

echo "Média Final do Estudante: " . number_format($media, 1, ',', '.') . "<br>";
echo "Volume de Absenteísmo (Faltas): " . $faltas . " aulas<br><br>";

// Conjunção lógica (Operador AND)
if ($media >= 6.0 && $faltas <= 15) {
    echo "<b>SITUAÇÃO DO ALUNO: APROVADO</b>";
} else {
    echo "<b>SITUAÇÃO DO ALUNO: REPROVADO</b>";
}
?>
```

### ✅ Log de Saída
```text
Média Final do Estudante: 7,5
Volume de Absenteísmo (Faltas): 12 aulas

SITUAÇÃO DO ALUNO: APROVADO
```

---

## 03 — 🔢 Tabuada Automatizada

### 📌 Descrição & Regras de Negócio
Geração automática de matriz matemática multiplicativa baseada em um número fixado no escopo. Utiliza um laço de iteração contada incremental para evitar redundância de código de saída.

```text
Estrutura do Loop: Iterar com pivot ($i) variando de 1 até 10, com passo unitário ($i++)
```

### 💻 Implementação
```php
<?php
// Gerador iterativo de matriz de multiplicação linear
$numero = 7;

echo "<h3>Tabuada do número $numero</h3>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>
```

### ✅ Log de Saída
```text
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
...
7 x 10 = 70
```

---

## 04 — 📊 Processamento Estatístico de Notas

### 📌 Descrição & Regras de Negócio
Dada uma coleção indexada de dados (array), o algoritmo faz a varredura sequencial dos elementos para acumulação de valores aritméticos e determinação das fronteiras limítrofes (máximos e mínimos locais).

```text
Processamento: 
1. Média = Somatório de todas as notas / Contagem de elementos do array
2. Maior/Menor = Comparações lógicas sucessivas a cada iteração de ponteiro
```

### 💻 Implementação
```php
<?php
// Análise estatística descritiva de matriz unidimensional
$notas = [8.5, 7.0, 9.5, 6.5, 8.0];

$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

echo "<h3>Varredura de Notas da Turma</h3>";

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

echo "Média Global do Grupo: " . number_format($media, 2, ',', '.') . "<br>";
echo "Pico de Desempenho (Maior Nota): " . $maior . "<br>";
echo "Piso de Desempenho (Menor Nota): " . $menor . "<br>";
?>
```

### ✅ Log de Saída
```text
Média Global do Grupo: 7,90
Pico de Desempenho (Maior Nota): 9.5
Piso de Desempenho (Menor Nota): 6.5
```

---

## 05 — ⚖️ Cálculo e Classificação de IMC

### 📌 Descrição & Regras de Negócio
Centralização lógica de rotinas biométricas em uma função isolada com passagem de parâmetros por cópia de valor. Executa a equação de massa corporal e filtra o resultado nas janelas antropométricas padrão da OMS.

```text
Equação: IMC = Peso / Altura²
```

### 💻 Implementação
```php
<?php
/**
 * Executa o cálculo antropométrico e retorna string estruturada
 * @param float $peso
 * @param float $altura
 * @return string
 */
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    $imc_formatado = number_format($imc, 2, ',', '.');
    
    // Árvore de decisão encadeada (Conditional Tree)
    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $classificacao = "Peso normal";
    } elseif ($imc >= 25.0 && $imc < 29.9) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }
    
    return "Métrica IMC: $imc_formatado | Classificação Clínica: $classificacao";
}

$peso_pessoa = 78.5;
$altura_pessoa = 1.75;

echo "<h3>Laudo Biométrico Automatizado</h3>";
echo "Peso Avaliado: " . $peso_pessoa . " kg<br>";
echo "Altura Avaliada: " . $altura_pessoa . " m<br><br>";
echo "<b>" . calcularIMC($peso_pessoa, $altura_pessoa) . "</b>";
?>
```
