<?php

namespace DesignPatterns\descontos;

use DesignPatterns\Impsotos\Orcamento;

abstract class Desconto
{
    protected $proxDesconto;

    public function __construct(?Desconto $desconto)
    {
        $this->proxDesconto = $desconto;
    }

    public abstract function calcularDesconto(Orcamento $orcamento):float;
}