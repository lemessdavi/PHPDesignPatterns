<?php

namespace DesignPatterns\EstadosOrcamento;

use DesignPatterns\Impostos\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.10;
    }

    public function reprovar(Orcamento $orcamento)
    {
     $orcamento->estadoOrcamento = new Reprovado();
    }

    public function finalizar(Orcamento $orcamento)
    {
     $orcamento->estadoOrcamento = new Reprovado();
    }
}