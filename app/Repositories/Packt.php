<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

abstract class Packt
{
    public $baseUrl = "https://api.packt.com/";
    private $token = "n4k0srKzu5yKNYfzECBePGEmOPgRSdQtGpssA5tY";

    protected function makeCall($endpoint, $method)
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->$method($this->baseUrl . $endpoint);
    }
}
