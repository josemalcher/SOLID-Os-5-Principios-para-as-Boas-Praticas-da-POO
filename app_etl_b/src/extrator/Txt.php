<?php

namespace src\extrator;

class Txt extends Arquivo
{
  public function lerArquivo(string $caminho): array
  {
    $handle = fopen($caminho, 'r');

    while (!feof($handle)) {
      $linha = fgets($handle); // o ponteiro de leitura do arquivo é incrementado
      $this->setDados(
        substr($linha,11,30),
        substr($linha,0,11),
        substr($linha,41,50));
    }
    fclose($handle);

    return $this->getDados();
  }
}