<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogDePedidoGerado {
  public function executaAcao(Pedido $pedido) {
    echo "Log de pedido gerado.";
  }
}