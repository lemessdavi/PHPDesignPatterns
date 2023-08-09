<?php

namespace DesignPatterns\Impostos;

class IJPT extends ImpostoComDuasAliquotas
{
    public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor < 4000 && $orcamento->qntdItens == 1;
    }

    public function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.024;
    }

    public function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.12;
    }
}