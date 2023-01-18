<?php

namespace App;

class Sms implements IMensagemToken
{
  public function enviar(): void
  {
    echo 'SMS: Seu token é 4321';
  }
}