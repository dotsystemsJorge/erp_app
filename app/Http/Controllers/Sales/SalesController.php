<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('sales/index');
    }

    public function showSale()
    {
        return view('sales/showsale');
    }

    public function newSale()
    {
        return view('sales/newsale');
    }
}
