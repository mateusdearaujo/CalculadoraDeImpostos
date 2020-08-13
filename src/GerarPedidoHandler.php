<?php

namespace Alura\DesignPattern;

use SplObserver;

class GerarPedidoHandler implements \SplSubject {

    /** @var SplObserver[]  */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function execute(GerarPedido $gerarPedido) {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $this->pedido = $pedido;
        $this->notify();

    }
    public function attach(SplObserver $observer) {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function notify() {
        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }

    public function detach(SplObserver $observer) {

    }
}