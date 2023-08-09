<?php

namespace DesignPatterns;

use DesignPatterns\Impostos\Imposto;
use DesignPatterns\Impostos\Orcamento;

class CalculadoraDeImpostos
{
    public function calcularImposto(Orcamento $orcamento, Imposto $imposto):float{
        return $imposto->calcularImposto($orcamento);
    }
}