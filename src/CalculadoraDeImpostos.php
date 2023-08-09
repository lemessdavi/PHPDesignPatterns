<?php

namespace DesignPatterns;

use DesignPatterns\Impsotos\Imposto;
use DesignPatterns\Impsotos\Orcamento;

class CalculadoraDeImpostos
{
    public function calcularImposto(Orcamento $orcamento, Imposto $imposto):float{
        return $imposto->calcularImposto($orcamento->valor);
    }
}