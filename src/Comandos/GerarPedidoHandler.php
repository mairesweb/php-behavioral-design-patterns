<?php

namespace Alura\DesignPattern\Comandos;

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\AcoesAoGerarPedido\{CriarPedidoNoBanco, EnviarEmailDoPedido,LogDePedidoGerado};

class GerarPedidoHandler {
  public function __construct(/* PedidoRepository, MailService */) {
    
  }

  public function execute(GerarPedido $gerarPedido) {
    $orcamento = new Orcamento();
    $orcamento->quantidadeDeItens = $gerarPedido->getNumeroItens();
    $orcamento->valor = $gerarPedido->getValorOrcamento();

    $pedido = new Pedido();
    $pedido->dataFinalizacao = new \DateTimeImmutable();
    $pedido->nomeCliente = $gerarPedido->getNomeCliente();
    $pedido->orcamento = $orcamento;

    $pedidosRepository = new CriarPedidoNoBanco();
    $enviarEmailDoPedido = new EnviarEmailDoPedido();
    $logDoPedido = new LogDePedidoGerado();

    $pedidosRepository->executaAcao($pedido);
    $enviarEmailDoPedido->executaAcao($pedido);
    $logDoPedido->executaAcao($pedido);
  }
}