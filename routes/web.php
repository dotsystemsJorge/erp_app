<?php

use App\Http\Controllers\Administration\AdministrationController;
use App\Http\Controllers\Analysis\AnalysisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Billing\BillingController;
use App\Http\Controllers\CRM\CRMController;
use App\Http\Controllers\HR\HRController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Sales\SalesController;
use App\Http\Controllers\Stock\StockController;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/dashboard', [LoginController::class,'loginAction'])->name('dashboard');
Route::post('/dashboard', [LoginController::class,'loginAction']);

Route::get('/administration',[AdministrationController::class, 'index'])->name('administration');

Route::get('/analysis', [AnalysisController::class, 'index'])->name('analysis');

Route::get('/billing', [BillingController::class, 'index'])->name('billing');

Route::get('/CRM', [CRMController::class,'index'])->name('CRM');

Route::get('/rrhh', [HRController::class,'index'])->name('HR');

Route::get('/sales',[SalesController::class, 'index'])->name('sales');

Route::get('/stock',[StockController::class, 'index'])->name('stock');

Route::get('/branch',[StockController::class, 'showBranch'])->name('branch');

Route::get('/warehouse',[StockController::class, 'showWarehouse'])->name('warehouse');

Route::get('/product',[StockController::class, 'showProduct'])->name('product');

Route::get('/editproduct',[ProductController::class, 'editProduct'])->name('editproduct');

Route::get('/newproduct',[ProductController::class, 'newProduct'])->name('newproduct');

Route::get('/sales/showsale',[SalesController::class, 'showSale'])->name('showsale');

route::get('/sales/newsale',[SalesController::class, 'newSale'])->name('newsale');
