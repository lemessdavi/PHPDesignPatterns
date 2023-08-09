<?php

namespace DesignPatterns\EstadosOrcamento;

use DesignPatterns\Impostos\Orcamento;

class EmAprovacao extends EstadoOrcamento
{

    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->estadoOrcamento * 0.20;
    }

    public function aprovar(Orcamento $orcamento)
    {
        $orcamento->estadoOrcamento = new Aprovado();
    }

    public function reprovar(Orcamento $orcamento)
    {
        $orcamento->estadoOrcamento = new Reprovado();
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->estadoOrcamento= new Finalizado();
    }
}