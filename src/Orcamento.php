<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadoOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadoOrcamento\EstadoOrcamento;

class Orcamento {
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct() {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra() {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova() {
        $this->estadoAtual->aprova($this);
    }

    public function reprova() {
        $this->estadoAtual->reprova($this);
        return "Reprovado";
    }

    public function finaliza() {
        $this->estadoAtual->finaliza($this);
    }
}