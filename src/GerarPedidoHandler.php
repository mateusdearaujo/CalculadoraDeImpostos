<?php


namespace Alura\DesignPattern;


class GerarPedidoHandler {

    public function execute(GerarPedido $gerarPedido) {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "Nome do Cliente: " . $pedido->nomeCliente . PHP_EOL;
        echo "Quantidade de itens: " . $orcamento->quantidadeItens . PHP_EOL;
        echo "Valor total da Compra: R$ " . $orcamento->valor . PHP_EOL;
        echo "Cria pedido no Banco de Dados " . PHP_EOL;
        echo "Envia e-mail para cliente" . PHP_EOL;
    }
}