<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Cache;

class Products extends Packt
{
    public function list($limit = 4, $page = 0)
    {
        $products = collect(Cache::remember("product.{$limit}.{$page}", 86400, function () use ($limit, $page) {
            return $this->makeCall("api/v1/products?page={$page}&limit={$limit}", 'get')['products'] ?? [];
        }));

        $products = $products->map(function ($product, $key) {
            if ($key % 2 === 0) {
                sleep(1);
            }

            return Cache::remember($product['id'], 86400, function () use ($product) {
                $product['details'] = $this->show($product['id']);
                $product['price'] = $this->price($product['id']);

                return $product;
            });
        });

        // Filter through failed calls
        return $products->filter(static function ($product) {
            return isset($product['details']['id'], $product['price']['prices']);
        });
    }

    public function show($id)
    {
        if (Cache::has($id)) {
            return Cache::get($id);
        }

        $response = $this->makeCall("api/v1/products/{$id}", 'get');

        if (array_key_exists('id', $response)) {
            return $response;
        } else {
            return [];
        }
    }

    public function price($id, $currency = 'INR')
    {
        return $this->makeCall("api/v1/products/{$id}/price/{$currency}", 'get');
    }

    public function cover($id, $size = 'small')
    {
        return $this->makeCall("api/v1/products/{$id}/cover/{$size}", 'get');
    }
}
