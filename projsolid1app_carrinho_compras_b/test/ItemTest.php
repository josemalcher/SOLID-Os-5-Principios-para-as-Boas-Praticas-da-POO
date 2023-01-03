<?php

namespace test;

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
//  public function testEstouFuncionando()
//  {
//    $valor = 10;
//    $this->assertEquals($valor, 10);
//  }
  public function testEstadoInicialItem()
  {
    $item = new Item();
    // asserções do PHPUnit
    $this->assertEquals('', $item->getDescricao());
    $this->assertEquals(0, $item->getValor());
  }

  public function testGetDescricao()
  {
    $descricao = 'Cadeira de plástico';
    $item = new Item();
    $item->setDescricao($descricao);
    $this->assertEquals($descricao, $item->getDescricao());
  }

  public function testGetValor()
  {
    $valor = 35.99;
    $item = new Item();
    $item->setValor($valor);
    $this->assertEquals($valor, $item->getValor());
  }

  public function testItemValido()
  {
    $item = new Item();
    // seria submeter um item válido para o teste e retornar ok
    $item->setValor(55);
    $item->setDescricao('Cadeira de plastico');
    $this->assertEquals(true, $item->itemValido());

    // seria submeter um item inválido para o teste e retornar false(descricao)
    $item->setValor(55);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());

    // seria submeter um item inválido par ao teste e retornar false(valor)
    $item->setValor(0);
    $item->setDescricao('Cadeira de plastico');
    $this->assertEquals(false, $item->itemValido());

    $item->setValor(0);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());
  }

  /**
   * @dataProvider dataValores
   * */
  public function testGetSetValor($valor)
  {
    // $valor = 35.99;
    $item = new Item();
    $item->setValor($valor);
    $this->assertEquals($valor, $item->getValor());
  }

  public function dataValores()
  {
    return [
      [100],
      [-2],
      [0],
      [5],
    ];
  }
}