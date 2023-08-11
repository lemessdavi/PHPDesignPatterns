<?php

namespace DesignPatterns\Http;

class ReactHttpAdapter implements  HttpAdapter
{

    public function post(String $url, array $dados = [])
    {
        //faz a iplementacao aqui
        echo "http react adapter";
    }
}