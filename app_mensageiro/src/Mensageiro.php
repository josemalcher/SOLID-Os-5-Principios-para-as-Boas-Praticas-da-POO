<?php

namespace App;

use App\IMensagemToken;

class Mensageiro
{


  private $canal;

  public function __construct(IMensagemToken $canal)
  {
    $this->setCanal($canal);
  }
  /**
   * @return mixed
   */
  public function getCanal(): IMensagemToken
  {
    return $this->canal;
  }

  /**
   * @param mixed $canal
   */
  public function setCanal(IMensagemToken $canal): void
  {
    $this->canal = $canal;
  }

  public function enviarToken() :void
  {
//    $classe = '\App\\' . ucfirst($this->getCanal());
//    echo "$classe <br>";
//
//    $obj = new $classe; // impplementações = instancias
//    $obj->enviar();
    $this->getCanal()->enviar();
  }
}