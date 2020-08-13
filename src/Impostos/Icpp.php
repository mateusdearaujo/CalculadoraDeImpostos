<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas {

    protected function deveAplicarTaxaMaxima(): bool {
        return $orcamento->valor > 500;
    };
    protected function calculaTaxaMaxima(): float {
        return $orcamento->valor * 0.03;
    };
    protected function calculaTaxaMinima(): float {
        return $orcamento->valor * 0.02;
    };
}