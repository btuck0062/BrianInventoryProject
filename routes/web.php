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


Route::get('/order-form', 'App\Http\Controllers\OrderController@showForm')->name('showOrderForm');

// We need a form to request products

// We need to create products
// Create product form
// Create A product seeder or factory

// Serial Number Lookup
// Search product Db table

// Transfer page
Route::get('/Transfer-form', 'App\Http\Controllers\TransferController@showForm')->name('showTransferForm');
// Issue 'these' products to a "customer"


// ************************************************************************* //
// Brian's Task
// ************************************************************************* //

//  How to create a controller in laravel?
//  How to create a migration in laravel?
//  How to create a view in laravel?

// Create a controller & view for each of the following functions
//   Transfer Page
            //  Transfer Route
            //  Transfer Controller

//   Serial number Search
            // Page
            // Route
            // Controller
        
//   Customer Controller
            // Page
            // Route
            // Controller

// ************************************************************************* //
// Brion's Tasks
// ************************************************************************* //


// Write Schema in document
// Architect Data Relationships
// Write main controller functions with explanation in document

