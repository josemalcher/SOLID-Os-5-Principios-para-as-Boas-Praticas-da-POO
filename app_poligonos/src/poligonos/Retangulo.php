<?php

namespace src\poligonos;

class Retangulo
{
  protected $largura;
  protected $altura;

  /**
   * @return mixed
   */
  public function getLargura(): float
  {
    return $this->largura;
  }

  /**
   * @param mixed $largura
   */
  public function setLargura(float $largura): void
  {
    $this->largura = $largura;
  }

  /**
   * @return mixed
   */
  public function getAltura(): float
  {
    return $this->altura;
  }

  /**
   * @param mixed $altura
   */
  public function setAltura(float $altura): void
  {
    $this->altura = $altura;
  }

}