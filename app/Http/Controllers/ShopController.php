<?php

namespace App\Http\Controllers;

use Facades\App\Repositories\Products;
use Illuminate\Support\Facades\Cache;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop', [
            'books' => Products::list(10, 0)
        ]);
    }

    public function show($id)
    {
        $product = Cache::remember($id, 86400, function () use ($id) {
            return [
                'details' => Products::show($id),
                'price'   => Products::price($id)
            ];
        });

        return view('product', [
            'book'          => $product,
            'isProductPage' => true,
        ]);
    }
}
