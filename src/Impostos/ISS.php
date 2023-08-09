<?php

namespace DesignPatterns\Impostos;

class ISS implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}