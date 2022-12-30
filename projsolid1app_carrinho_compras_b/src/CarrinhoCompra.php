<?php

namespace App;

class CarrinhoCompra
{
  // atributos
  private $itens;
  private $status;
  private $valorTotal;

  //métodos
  public function __construct()
  {
    $this->itens = [];
    $this->status = 'aberto';
    $this->valorTotal = 0;
  }

  public function exibirItens()
  {
    return $this->itens;
  }

  public function adicionarItens(string $item, float $valor)
  {
    array_push($this->itens, ["item" => $item, "valor" => $valor]);

    $this->valorTotal += $valor;

    return true;
  }

  public function valorTotal()
  {
    return $this->valorTotal;
  }

  public function exibirStatus()
  {
    return $this->status;
  }

  public function confirmarPedido()
  {
    if ($this->validarCarrinho()) {
      $this->status = 'CONFIRMADO';
      $this->enviarEmailConcirmacao();
      return true;
    } else {
      return false;
    }
  }

  public function enviarEmailConcirmacao()
  {
    echo "<br>...enviando email de confirmação<br>";
  }

  public function validarCarrinho()
  {
    return count($this->itens) > 0;
  }

}