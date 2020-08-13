<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas implements Imposto {
    public function calculaImposto(Orcamento $orcamento): float {
        if($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }
        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(): bool;
    abstract protected function calculaTaxaMaxima(): float;
    abstract protected function calculaTaxaMinima(): float;
}