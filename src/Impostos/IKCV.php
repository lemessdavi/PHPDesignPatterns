<?php

namespace DesignPatterns\Impostos;

class IKCV extends ImpostoComDuasAliquotas
{

    public function deveAplicarTaxaMaxima(Orcamento $orcamento): boolean
    {
        return $orcamento->valor >300 && $orcamento->qntdItens >3;
    }

    public function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor*0.04;
    }

    public function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor*0.30;
    }
}