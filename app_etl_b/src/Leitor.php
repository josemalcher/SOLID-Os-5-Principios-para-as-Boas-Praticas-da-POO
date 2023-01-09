<?php

namespace src;

use src\extrator\Arquivo;

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
  public function setDiretorio(string $diretorio): void
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
  public function setArquivo(string $arquivo): void
  {
    $this->arquivo = $arquivo;
  }

  public function lerArquivo(): array
  {

    $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
    $extencao = explode('.', $this->getArquivo());

    $classe = 'src\extrator\\' . ucfirst($extencao[1]);

    return call_user_func_array([
      new $classe,
      'lerArquivo'
    ],
      [
        $caminho
      ]);


    /*$caminho = $this->getDiretorio() . '/' . $this->getArquivo();
    $arquivo = new Arquivo();

    $extencao = explode('.', $this->getArquivo());

    if ($extencao[1] == 'csv') {
      $arquivo->lerArquivoCSV($caminho);

    }else if($extencao[1] == 'txt'){
      $arquivo->lerArquivoTXT($caminho);
    }
    return $arquivo->getDados();*/
  }
}