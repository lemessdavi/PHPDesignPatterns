<?php

namespace DesignPatterns\descontos;

use DesignPatterns\Impsotos\Orcamento;

class SemDeconto extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}