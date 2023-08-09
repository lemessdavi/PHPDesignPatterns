<?php

namespace DesignPatterns\Impostos;

class ICMS implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}