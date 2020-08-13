<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class LogGerarPedido implements \SplObserver {
    public function update(SplSubject $subject): void {
        echo "Gerando log de pedido" . PHP_EOL;
    }
}