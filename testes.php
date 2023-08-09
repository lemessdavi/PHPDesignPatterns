<?php

use DesignPatterns\CalculadoraDeImpostos;
use DesignPatterns\Impsotos\ICMS;
use DesignPatterns\Impsotos\ISS;
use DesignPatterns\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

$imposto = new ICMS();
//$imposto = new ISS();

echo $calculadora->calcularImposto($orcamento->valor, $imposto);







