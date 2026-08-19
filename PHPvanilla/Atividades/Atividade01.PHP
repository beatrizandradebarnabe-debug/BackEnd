<?php
declare(strict_types=1);

// Categoria do cliente
$categoriaCliente = "A";

// Valor inicial da dívida
$divida = 1000.00;

// Escolhe a taxa de juros de acordo com a categoria
$taxa = match ($categoriaCliente) {
    "A" => 0.01,
    "B" => 0.02,
    "C" => 0.03,
    default => 0.05
};

// Mostra as informações
echo "Categoria: " . $categoriaCliente . "<br>";
echo "Taxa de juros: " . ($taxa * 100) . "%<br>";
echo "Dívida inicial: R$ " . $divida . "<br><br>";

// Repetição dos 12 meses
for ($mes = 1; $mes <= 12; $mes++) {

    // Se for o mês 6, não cobra juros
    if ($mes === 6) {

        echo "Mês 6: ISENÇÃO DE JUROS<br>";
        echo "Dívida: R$ " . number_format($divida, 2, ",", ".") . "<br><br>";

        // Pula para o próximo mês
        continue;
    }

    // Calcula os juros
    $juros = $divida * $taxa;

    // Atualiza a dívida
    $divida = $divida + $juros;

    // Mostra o resultado
    echo "Mês: " . $mes . "<br>";
    echo "Juros: R$ " . number_format($juros, 2, ",", ".") . "<br>";
    echo "Dívida: R$ " . number_format($divida, 2, ",", ".") . "<br>";
    echo "<br>";
}

?>