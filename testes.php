<?php

use DesignPatterns\CalculadoraDeImpostos;
use DesignPatterns\Impsotos\ICMS;
use DesignPatterns\Impsotos\Orcamento;

require 'vendor/autoload.php';

//$calculadora = new CalculadoraDeImpostos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//
//$imposto = new ICMS();
////$imposto = new ISS();
//
//echo $calculadora->calcularImposto($orcamento, $imposto);

$calculadora = new \DesignPatterns\CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 1000;
$orcamento->qntdItens = 2;

echo $calculadora->calcularDesconto($orcamento);





