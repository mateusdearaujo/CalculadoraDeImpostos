<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class EnviarPedidoPorEmail implements \SplObserver {
    public function update(SplSubject $subject): void {
        echo $pedido->pedido->nomeCliente;
        echo "Enviando e-mail do pedido gerado" . PHP_EOL;
    }
}