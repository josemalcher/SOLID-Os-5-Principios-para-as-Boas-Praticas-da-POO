<?php

namespace App;

class Email implements IMensagemToken
{
  public function enviar(): void
  {
    echo 'email: Seu token é 1234';
  }
}