<?php

namespace DesignPatterns\Impsotos;

class ISS implements Imposto
{
    public function calcularImposto(float $orcamento): float
    {
        return $orcamento * 0.06;
    }
}