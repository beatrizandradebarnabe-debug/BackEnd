<?php
declare(strict_types=1);

$produtos = [
    1 => ["nome" => "Coxinha", "preco" => 6.00, "estoque" => 10],
    2 => ["nome" => "Suco", "preco" => 5.00, "estoque" => 8],
    3 => ["nome" => "Sanduíche", "preco" => 12.00, "estoque" => 5],
    4 => ["nome" => "Bolo", "preco" => 7.50, "estoque" => 6]
];

$pedido = [];

$opcao = 0;

// Menu
do {

    echo "<h2>CANTINA SENAI</h2>";

    echo "1 - Listar produtos<br>";
    echo "2 - Adicionar produto<br>";
    echo "3 - Resumo do pedido<br>";
    echo "4 - Finalizar compra<br>";
    echo "0 - Sair<br><br>";

    // Simulação da escolha
    $opcao = 1;

    // Escolhe a ação
    match ($opcao) {

        1 => listarProdutos($produtos),

        2 => adicionarProduto($produtos, $pedido),

        3 => resumoPedido($pedido),

        4 => finalizarCompra($pedido),

        0 => exit("Saiu da cantina!"),

        default => print "Opção inválida!<br>"
    };

    // Para não ficar infinito durante o teste
    break;

} while ($opcao != 4 && $opcao != 0);


// FUNÇÃO PARA LISTAR
function listarProdutos($produtos)
{
    echo "<h3>Produtos:</h3>";

    foreach ($produtos as $codigo => $produto) {

        echo "Código: $codigo<br>";
        echo "Nome: " . $produto["nome"] . "<br>";
        echo "Preço: R$ " . $produto["preco"] . "<br>";
        echo "Estoque: " . $produto["estoque"] . "<br>";
        echo "<br>";
    }
}


// FUNÇÃO PARA ADICIONAR
function adicionarProduto(&$produtos, &$pedido)
{
    $codigo = 1;
    $quantidade = 2;

    if (!isset($produtos[$codigo])) {

        echo "Produto não encontrado!<br>";
        return;
    }

    while (
        $quantidade <= 0 ||
        $quantidade > $produtos[$codigo]["estoque"]
    ) {

        echo "Quantidade inválida!<br>";
        return;
    }

    $produtos[$codigo]["estoque"] -= $quantidade;

    $pedido[] = [
        "nome" => $produtos[$codigo]["nome"],
        "preco" => $produtos[$codigo]["preco"],
        "quantidade" => $quantidade
    ];

    echo "Produto adicionado!<br>";
}


// FUNÇÃO PARA MOSTRAR O PEDIDO
function resumoPedido($pedido)
{
    if (empty($pedido)) {

        echo "Nenhum produto foi adicionado.<br>";

    } else {

        foreach ($pedido as $item) {

            $subtotal =
                $item["quantidade"] * $item["preco"];

            echo "Produto: " . $item["nome"] . "<br>";
            echo "Quantidade: " . $item["quantidade"] . "<br>";
            echo "Preço: R$ " . $item["preco"] . "<br>";
            echo "Subtotal: R$ $subtotal<br>";
            echo "<br>";
        }
    }
}


// FINALIZAR
function finalizarCompra($pedido)
{
    $total = 0;

    for ($i = 0; $i < count($pedido); $i++) {

        $total +=
            $pedido[$i]["quantidade"] *
            $pedido[$i]["preco"];
    }

    echo "Total: R$ $total<br>";
}

?>