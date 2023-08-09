<?php

namespace DesignPatterns\Impostos;

abstract class ImpostoComDuasAliquotas implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float{
        if ($this->deveAplicarTaxaMaxima($orcamento)){
            return $this->calcularTaxaMaxima($orcamento);
        }

        return $this->calcularTaxaMinima($orcamento);
    }

    public abstract function deveAplicarTaxaMaxima(Orcamento $orcamento):bool;
    public abstract function calcularTaxaMinima(Orcamento $orcamento):float;
    public abstract function calcularTaxaMaxima(Orcamento $orcamento):float;


    }


