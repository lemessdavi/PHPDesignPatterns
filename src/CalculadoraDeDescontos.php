<?php

namespace DesignPatterns;

use DesignPatterns\descontos\DescontoMaisDe500Reais;
use DesignPatterns\descontos\DescontoMaisDe5Itens;
use DesignPatterns\descontos\SemDeconto;
use DesignPatterns\Impsotos\Orcamento;

class CalculadoraDeDescontos
{
    public function calcularDesconto(Orcamento $orcamento){
        $chainDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDeconto(null)
            )
        );

        return $chainDescontos->calcularDesconto($orcamento);
    }

}