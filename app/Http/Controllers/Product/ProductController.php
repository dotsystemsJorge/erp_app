<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function newProduct()
    {
        return view('stock/products/newproduct');
    }

    public function editProduct()
    {
        return view('stock/products/editproduct');
    }

}

?>