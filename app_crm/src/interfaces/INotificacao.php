<?php

namespace App\interfaces;

use App\componentes\Notificacao;

interface INotificacao
{
  public function enviarNotificacao(Notificacao $notificacao);
}