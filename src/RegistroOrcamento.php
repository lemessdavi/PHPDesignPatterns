<?php

namespace DesignPatterns;

use DesignPatterns\EstadosOrcamento\Finalizado;
use DesignPatterns\Http\HttpAdapter;
use DesignPatterns\Impostos\Orcamento;

class RegistroOrcamento
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento  $orcamento)
    {
        if (!$orcamento->estadoOrcamento instanceof Finalizado){
            throw new \Exception("No da pra fazer isso com finalizado");
        }

        $this->http->post("http://sitemaneiro.com", [
            "valor:" => $orcamento->valor,
            "quantidadeItens"=>$orcamento->qntdItens
        ]);

    }

}