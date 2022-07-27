<?php

namespace Alura\DesignPattern;

use DomainException;

class Orcamento {
  public int $quantidadeDeItens;
  public float $valor;
  public string $estadoAtual;

  public function aplicaDescontoExtra() {
    $this->valor -= $this->calculaDescontoExtra();
  }

  public function calculaDescontoExtra(): float {
    if ($this->estadoAtual == 'EM_APROVACAO') {
      return $this->valor * 0.05;
    }

    if ($this->estadoAtual == 'AROVADO') {
      return $this->valor * 0.02;
    }

    throw new DomainException(
      'Orçamentos reprovados e finalizados não recebem desconto'
    );
  }
}