<?php

namespace App;

class EmailService
{
  private $de;
  private $para;
  private $assunto;
  private $conteudo;

  /**
   * @param $de
   * @param $para
   * @param $assunto
   * @param $conteudo
   */
  public function __construct(
    string $de = 'contato@teste.com',
    string $para = '',
    string $assunto = '',
    string $conteudo = ''
  )
  {
    $this->de = $de;
    $this->para = $para;
    $this->assunto = $assunto;
    $this->conteudo = $conteudo;
  }

  public static function disparaEmail()
  {
    return '--- envia email ---';
  }

}