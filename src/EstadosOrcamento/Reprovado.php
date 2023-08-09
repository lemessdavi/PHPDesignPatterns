<?php

namespace DesignPatterns\EstadosOrcamento;

use DesignPatterns\Impostos\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function finalizar(Orcamento $orcamento)
    {
     $orcamento->estadoOrcamento = new Finalizado();
    }

}