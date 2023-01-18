<?php

namespace App;

use App\Email;

class Mensageiro
{
  private $canal;

  /**
   * @return mixed
   */
  public function getCanal(): string
  {
    return $this->canal;
  }

  /**
   * @param mixed $canal
   */
  public function setCanal(string $canal): void
  {
    $this->canal = $canal;
  }

  public function enviarToken() :void
  {
    $classe = '\App\\' . ucfirst($this->getCanal());
    echo "$classe <br>";

    $obj = new $classe;
    $obj->enviar();

  }
}