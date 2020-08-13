<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadoOrcamento\Finalizado;
use Exception;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate {

    /** @var Orcamento[] **/
    private array $orcamentos;

    public function __construct() {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento) {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados(): array {
    }

    public function getIterator() {
        return new \ArrayIterator($this->orcamentos);
    }
}