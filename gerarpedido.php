<?php

require_once 'vendor/autoload.php';

use DesignPatterns\{AcoesAposGerarPedido\CriarPedidoNoBanco,
    AcoesAposGerarPedido\EnviarPedidoPorEmail,
    AcoesAposGerarPedido\LogGerarPedido,
    GerarPedido,
    GerarPedidoHandler,
    Impostos\Orcamento,
    Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);
