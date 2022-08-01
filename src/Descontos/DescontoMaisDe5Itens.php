<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto {

  public function calcular(Orcamento $orcamento): float {
    if ($orcamento->quantidadeDeItens > 5) {
      return $orcamento->valor * 0.1;
    }

    return $this->proximoDesconto->calcular($orcamento);
  }
}