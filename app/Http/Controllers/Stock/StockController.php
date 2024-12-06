<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view('stock/index');
    }

    public function showBranch()
    {
        return view('stock/branches/branch');
    }

    public function showWarehouse()
    {
        return view('stock/warehouses/warehouse');
    }

    public function showPosition()
    {
        return view('stock/positions/position');
    }

    public function showProduct()
    {
        return view('stock/products/product');
    }
}
