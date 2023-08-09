<?php

namespace DesignPatterns\EstadosOrcamento;

use DesignPatterns\Impostos\Orcamento;

abstract class EstadoOrcamento
{

    public abstract function calculaDescontoExtra(Orcamento $orcamento) : float;

    /**
     * @throws \Exception
     */
    public function aprovar(Orcamento $orcamento)
    {
       throw  new \Exception('Impossivel aprovar esse orcamento.');
    }

    /**
     * @throws \Exception
     */
    public function reprovar(Orcamento $orcamento)
    {
        throw new \Exception('Impossivel reprovar esse orcamento.');
    }

    /**
     * @throws \Exception
     *
    /**
     * @throws \Exception
     */
    public function finalizar(Orcamento $orcamento)
    {
        throw new \Exception('Impossivel finalizar esse orcamento.');
    }

}