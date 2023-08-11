<?php

namespace DesignPatterns\Http;

class CurlHttpAdapter implements  HttpAdapter
{

    public function post(string $url, array $data = [])
    {
        echo "post curl";
    }


}