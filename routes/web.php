<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Need a url for the page
// Need html({page name}.blade.php) view --- order-views.order
// Controller for returning functions and data to view
// use model "Product"

// Create Order Model: What does a order look like?


Route::get('/order-form', 'App\Http\Controllers\OrderController@showOrderForm')->name('showOrderForm');
Route::post('/order-form', 'App\Http\Controllers\OrderController@createOrder')->name('createOrder');
Route::get('/order/{order}', 'App\Http\Controllers\OrderController@showOrder')->name('showOrder');

// We need a form to request product
// We need to create products
// Create product form
// Create A product seeder or factory

// Serial Number Lookup
// Search product Db table

// Transfer page
Route::get('/Transfer-form', 'App\Http\Controllers\TransferController@showForm')->name('showTransferForm');
// Issue 'these' products to a "customer"


