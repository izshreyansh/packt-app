<?php

namespace App\Repositories;

use App\Repositories\Packt;

class Products extends Packt
{
    public function list($page=0, $limit=10)
    {
        return $this->makeCall("api/v1/products?page={$page}&limit={$limit}", 'get')->body();
    }

    public function show($id)
    {
        return $this->makeCall("api/v1/products/{$id}", 'get')->body();
    }

    public function price($id, $currency='INR')
    {
        return $this->makeCall("api/v1/products/{$id}/price/{$currency}", 'get')->body();
    }

    public function cover($id, $size='small')
    {
        return $this->makeCall("api/v1/products/{$id}/cover/{$size}", 'get')->body();
    }
}
