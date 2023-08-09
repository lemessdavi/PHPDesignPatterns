<?php

namespace DesignPatterns\Impostos;

interface Imposto
{
    public function calcularImposto(Orcamento $orcamento): float;
}