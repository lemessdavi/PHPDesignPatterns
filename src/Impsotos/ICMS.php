<?php

namespace DesignPatterns\Impsotos;

class ICMS implements Imposto
{
    public function calcularImposto(float $orcamento): float
    {
        return $orcamento * 0.1;
    }
}