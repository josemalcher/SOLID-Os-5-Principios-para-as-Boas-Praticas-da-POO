<?php

namespace src;

class Leitor
{
  private $diretorio;
  private $arquivo;

  /**
   * @return mixed
   */
  public function getDiretorio(): string
  {
    return $this->diretorio;
  }

  /**
   * @param string $diretorio
   */
  public function setDiretorio(string $diretorio):void
  {
    $this->diretorio = $diretorio;
  }

  /**
   * @return mixed
   */
  public function getArquivo(): string
  {
    return $this->arquivo;
  }

  /**
   * @param string $arquivo
   */
  public function setArquivo(string $arquivo):void
  {
    $this->arquivo = $arquivo;
  }

  public function lerArquivo():array
  {
    $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
    $arquivo = new Arquivo();

    $extencao = explode('.', $this->getArquivo());

    if ($extencao[1] == 'csv') {
      $arquivo->lerArquivoCSV($caminho);

    }else if($extencao[1] == 'txt'){
      $arquivo->lerArquivoTXT($caminho);
    }
    return $arquivo->getDados();
  }
}