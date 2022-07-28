<?php

namespace Alura\DesignPattern\Comandos;

use Alura\DesignPattern\{Orcamento, Pedido};

class GerarPedido {
  private float $valorOrcamento;
  private int $numeroItens;
  private string $nomeCliente;

  public function __construct(
    float $valorOrcamento,
    int $numeroItens,
    string $nomeCliente
  ) {
    $this->valorOrcamento = $valorOrcamento;
    $this->numeroItens = $numeroItens;
    $this->nomeCliente = $nomeCliente;
  }

  public function getNomeCliente()
  {
    return $this->nomeCliente;
  }

  public function setNomeCliente($nomeCliente)
  {
    $this->nomeCliente = $nomeCliente;

    return $this;
  }

  public function getNumeroItens()
  {
    return $this->numeroItens;
  }

  public function setNumeroItens($numeroItens)
  {
    $this->numeroItens = $numeroItens;

    return $this;
  }

  public function getValorOrcamento()
  {
    return $this->valorOrcamento;
  }

  public function setValorOrcamento($valorOrcamento)
  {
    $this->valorOrcamento = $valorOrcamento;

    return $this;
  }
}