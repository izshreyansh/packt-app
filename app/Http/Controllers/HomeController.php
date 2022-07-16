<?php

namespace App\Http\Controllers;

use Facades\App\Repositories\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('home', [
            'books' => Products::list(10, 0),
        ]);
    }
}
