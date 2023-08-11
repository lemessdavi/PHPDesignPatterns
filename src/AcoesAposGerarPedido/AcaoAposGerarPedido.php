<?php

namespace DesignPatterns\AcoesAposGerarPedido;

 use DesignPatterns\Pedido;

 interface AcaoAposGerarPedido
{
     public function executaAcao(Pedido $pedido);
}