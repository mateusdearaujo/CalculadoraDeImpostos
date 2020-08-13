<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class CriarPedidoNoBanco implements \SplObserver {
    public function update(SplSubject $subject): void {
        echo "Salvando pedido no Banco de Dados" . PHP_EOL;
    }
}