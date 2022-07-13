<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Facades\App\Repositories\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::list();
    }

    public function show($id)
    {
        return Products::show($id);
    }
}
