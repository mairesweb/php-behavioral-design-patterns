<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;

class CalculadoraDeDescontos {
  public function calcular(Orcamento $orcamento) : float {

    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMaisDe500Reais(
        new SemDesconto()
      )
    );

    return $cadeiaDeDescontos->calcular($orcamento);
  }
}