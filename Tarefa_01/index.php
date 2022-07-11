<?php
    include("venda.php");
    include("produto.php");

    $p1 = new Produtos();
    $p1->nome = "Caneta";
    $p1->valorUN = 1.50;
    $p1->qtd = 10;
    $p1->calcularvalor();

    $p2 = new Produtos();
    $p2->nome = "Caderno";
    $p2->valorUN = 20.00;
    $p2->qtd = 25;
    $p2->calcularvalor();

    $venda2 = new Vendas();
    $venda2->produtos[0] = $p1;
    $venda2->numprod++;
    $venda2->produtos[1] = $p2;
    $venda2->numprod++;
    $venda2->imprimir();

?>