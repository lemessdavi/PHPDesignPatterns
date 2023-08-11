<?php

namespace DesignPatterns\AcoesAposGerarPedido;

use DesignPatterns\Pedido;

class EnviarPedidoPorEmail implements  AcaoAposGerarPedido
{

    public function executaAcao(Pedido $pedido)
    {
        echo "Pedido enviado o remail";
    }
}