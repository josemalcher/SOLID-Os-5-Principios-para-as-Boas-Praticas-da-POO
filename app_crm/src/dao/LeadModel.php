<?php

namespace App\dao;

use App\BD;
use App\componentes\Log;
use App\componentes\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao
{
  public function salvar()
  {
    // TODO: Implement salvar() method.
  }

  public function enviarNotificacao(Notificacao $notificacao)
  {
    // TODO: Implement enviarNotificacao() method.
  }


}