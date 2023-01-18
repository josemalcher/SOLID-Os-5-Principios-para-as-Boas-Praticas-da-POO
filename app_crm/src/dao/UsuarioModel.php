<?php

namespace App\dao;

use App\BD;
use App\componentes\Log;
use App\componentes\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\ILog;
use App\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao
{
  public function salvar()
  {
    // TODO: Implement salvar() method.
  }

  public function registrarLog(Log $log)
  {
    // TODO: Implement registrarLog() method.
  }

  public function enviarNotificacao(Notificacao $notificacao)
  {
    // TODO: Implement enviarNotificacao() method.
  }


}