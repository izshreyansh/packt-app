<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

abstract class Packt
{
    public $baseUrl = 'https://api.packt.com/';

    protected function makeCall($endpoint, $method)
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer '.config('app.token'),
        ])->$method($this->baseUrl.$endpoint)->json();
    }
}
