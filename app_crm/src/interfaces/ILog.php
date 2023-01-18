<?php

namespace App\interfaces;

use App\componentes\Log;

interface ILog
{
  public function registrarLog(Log $log);
}