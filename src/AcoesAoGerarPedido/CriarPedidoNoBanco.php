<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco {
  public function executaAcao(Pedido $pedido) {
    echo "Cria o pedido no banco.";
  }
}