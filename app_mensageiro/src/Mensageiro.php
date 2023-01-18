<?php

namespace App;

use App\Email;

class Mensageiro
{
  public function enviarToken() :void
  {
    $obj = new Email();
    $obj->enviar();

  }
}