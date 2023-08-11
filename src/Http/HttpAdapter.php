<?php

namespace DesignPatterns\Http;

interface HttpAdapter
{
    public function post(String $url, array $data = []);

}