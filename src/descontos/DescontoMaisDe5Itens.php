<?php

namespace DesignPatterns\descontos;

use DesignPatterns\Impostos\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento):float
    {
     if ($orcamento->qntdItens >=5){
         return $orcamento->valor * 0.1;
     }
        return $this->proxDesconto->calcularDesconto($orcamento);
    }
}