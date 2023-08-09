
<?php

use DesignPatterns\CalculadoraDeImpostos;
use DesignPatterns\Impostos\ICMS;
use DesignPatterns\Impostos\IJPT;
use DesignPatterns\Impostos\Orcamento;

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
//
//$calculadora = new \DesignPatterns\CalculadoraDeDescontos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 1000;
//$orcamento->qntdItens = 2;
//
//echo $calculadora->calcularDesconto($orcamento);



$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;
$orcamento->qntdItens = 2;

$imposto = new IJPT();
//$imposto = new ISS();

echo $calculadora->calcularImposto($orcamento, $imposto);




