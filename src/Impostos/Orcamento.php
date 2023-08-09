<?php

namespace DesignPatterns\Impostos;

use DesignPatterns\EstadosOrcamento\EmAprovacao;
use DesignPatterns\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public float $qntdItens;
    public EstadoOrcamento $estadoOrcamento;

    public function __construct()
    {
        $this->estadoOrcamento = new EmAprovacao();
    }

    public function aprovar()
    {
        $this->estadoOrcamento->aprovar();
    }
    public function reprovar()
    {
        $this->estadoOrcamento->reprovar();
    }
    public function finalizar()
    {
        $this->estadoOrcamento->finalizar();
    }

}