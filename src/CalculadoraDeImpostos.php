<?php

namespace DesignPatterns;

use DesignPatterns\Impsotos\Imposto;

class CalculadoraDeImpostos
{
    public function calcularImposto(float $orcamento, Imposto $imposto):float{
        return $imposto->calcularImposto($orcamento);
    }
}