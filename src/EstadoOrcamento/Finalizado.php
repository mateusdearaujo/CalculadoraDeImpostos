<?php


namespace Alura\DesignPattern\EstadoOrcamento;


use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento {
    public function calculaDescontoExtra(Orcamento $orcamento): float {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }
}