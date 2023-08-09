<?php

namespace DesignPatterns\Impsotos;

interface Imposto
{
    public function calcularImposto(float $orcamento): float;
}