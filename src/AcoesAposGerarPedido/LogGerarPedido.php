<?php

namespace DesignPatterns\AcoesAposGerarPedido;

use DesignPatterns\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{

    public function executaAcao(Pedido $pedido)
    {
        echo "Log do pedido gerado com sucesso";
    }
}