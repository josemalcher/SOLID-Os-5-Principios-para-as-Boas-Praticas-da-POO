<?php

use App\{CarrinhoCompra,Item,Pedido,EmailService};

require __DIR__ . "/vendor/autoload.php";

echo '<h3>Com SRP</h3>';
//
//$carrinho1 = new CarrinhoCompra();
//print_r($carrinho1->exibirItens());
//echo "<br> Valor Total: " . $carrinho1->valorTotal();

/*$carrinho1->adicionarItens('Bicicleta', 99.9);
$carrinho1->adicionarItens('Patins', 40.9);
$carrinho1->adicionarItens('Patinente', 59.7);*/

//echo "<br>";
//print_r($carrinho1->exibirItens());
//echo "<br> Valor Total: " . $carrinho1->valorTotal();
//echo "<br> Status " . $carrinho1->exibirStatus();
//
//if ($carrinho1->confirmarPedido()) {
//  echo "<br>PEDIDO REALIZADO COM SUCESSO<br>";
//}else{
//  echo "<br>ERRO na confirmação do pedido. Carrinho não possui itens<br>";
//}
//
//echo "<br> Status " . $carrinho1->exibirStatus();

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(10.99);

$item2->setDescricao('Lampada');
$item2->setValor(7.99);

echo '<h4>Pedido iniciado</h4>>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo '<h4>Pedido com itens</h4>>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

echo '<h4>Itens do carrinho</h4>>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

echo '<h4>Valor do Pedido</h4>';
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
  $total += $item->getValor();
}
echo $total;

echo '<h4>Carrinho está válido</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

echo '<h4>Status do Pedido</h4>';
echo $pedido->getStatus();

echo '<h4>Confirmar Pedido</h4>';
echo $pedido->confirmar();

echo '<h4>Status do Pedido pós confirmado</h4>';
echo $pedido->getStatus();


echo '<h4>EMail...</h4>';
if ($pedido->getStatus() == 'confirmado') {
  echo EmailService::disparaEmail();
}