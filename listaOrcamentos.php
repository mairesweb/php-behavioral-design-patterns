<?php

use Alura\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$orcamento1 = new Orcamento();
$orcamento1->quantidadeDeItens = 5;
$orcamento1->aprova();
$orcamento1->valor = 1500;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeDeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeDeItens = 8;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1200;

$listaDeOrcamentos = [
  $orcamento1,
  $orcamento2,
  $orcamento3
];

foreach($listaDeOrcamentos as $orcamento) {
  echo "Valor: " . $orcamento->valor . PHP_EOL;
  echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
  echo "Quantidade de itens: " . $orcamento->quantidadeDeItens . PHP_EOL;
  echo PHP_EOL;
}