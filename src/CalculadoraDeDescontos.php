<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;

class CalculadoraDeDescontos {
  public function calcular(Orcamento $orcamento) : float {
    if ($orcamento->quantidadeDeItens > 5) {
      return $orcamento->valor * 0.1;
    }

    return 0;
  }
}