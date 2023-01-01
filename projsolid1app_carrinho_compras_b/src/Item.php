<?php

namespace App;

class Item
{
  private $descricao;
  private $valor;

  /**
   * @param $descricao
   * @param $valor
   */
  public function __construct()
  {
    $this->descricao = '';
    $this->valor = 0;
  }

  /**
   * @return string
   */
  public function getDescricao(): string
  {
    return $this->descricao;
  }

  /**
   * @param string $descricao
   */
  public function setDescricao(string $descricao): void
  {
    $this->descricao = $descricao;
  }

  /**
   * @return int
   */
  public function getValor(): int
  {
    return $this->valor;
  }

  /**
   * @param float $valor
   */
  public function setValor(float $valor): void
  {
    $this->valor = $valor;
  }




}