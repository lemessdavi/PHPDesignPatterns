<?php

namespace DesignPatterns\AcoesAposGerarPedido;

use DesignPatterns\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{

    public function executaAcao(Pedido $pedido)
    {
        echo "Salvando pedido no banco de dados";
    }
}