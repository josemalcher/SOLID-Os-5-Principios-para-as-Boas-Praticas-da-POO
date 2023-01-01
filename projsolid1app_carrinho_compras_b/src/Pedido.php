<?php

namespace App;

use App\CarrinhoCompra;

class Pedido
{
  private $status;
  private $carrinhoCompra;
  private $valorPedido;

  /**
   * @param $status
   * @param $carrinhoCompra
   * @param $valorPedido
   */
  public function __construct()
  {
    $this->status = 'aberto';
    $this->carrinhoCompra = new CarrinhoCompra();
    $this->valorPedido = 0;
  }

  /**
   * @return \App\CarrinhoCompra
   */
  public function getCarrinhoCompra(): \App\CarrinhoCompra
  {
    return $this->carrinhoCompra;
  }

  /**
   * @return string
   */
  public function getStatus(): string
  {
    return $this->status;
  }

  /**
   * @param string $status
   */
  public function setStatus(string $status): void
  {
    $this->status = $status;
  }

  public function confirmar()
  {
    if ($this->carrinhoCompra->validarCarrinho()) {
      $this->setStatus('confirmado');
      return true;
    }
    return false;
  }

}