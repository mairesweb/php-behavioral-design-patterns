<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Comandos\GerarPedido;
use Alura\DesignPattern\Comandos\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);