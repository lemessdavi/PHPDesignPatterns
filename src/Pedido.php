<?php

namespace DesignPatterns;

use DesignPatterns\Impostos\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;

    public function __construct()
    {

    }
}