<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikvp implements Imposto {
  public function calculaImposto(Orcamento $orcamento) : float {
      if ($orcamento->valor > 300 && $orcamento->quantidadeDeItens > 3) {
        return $orcamento->valor * 0.04;
      }

      return $orcamento->valor * 0.025;
  }
}