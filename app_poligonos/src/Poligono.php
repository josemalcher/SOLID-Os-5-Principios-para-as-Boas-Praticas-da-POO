<?php

namespace src;

class Poligono
{
  private $forma;

  /**
   * @return object
   */
  public function getForma(): object
  {
    return $this->forma;
  }

  /**
   * @param object $forma
   */
  public function setForma(object $forma): void
  {
    $this->forma = $forma;
  }

  public function getArea():float
  {
    return $this->getForma()->getAltura() * $this->getForma()->getLargura();
  }


}