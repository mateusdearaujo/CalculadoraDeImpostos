<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{AcoesAoGerarPedido\CriarPedidoNoBanco,
    AcoesAoGerarPedido\LogGerarPedido,
    GerarPedido,
    GerarPedidoHandler,
    Orcamento,
    Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);