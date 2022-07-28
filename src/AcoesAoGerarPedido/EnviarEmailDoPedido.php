<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarEmailDoPedido {
  public function executaAcao(Pedido $pedido) {
    echo "Envia o pedido por e-mail.";
  }
}