<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductsListController;
use App\Http\Controllers\Products\StoreProductController;
use App\Http\Controllers\Categories\AllCategoriesController;
use App\Http\Controllers\Products\FilteredByCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Categories Routes

Route::get('/categories', AllCategoriesController::class);

// Products Routes

Route::prefix('products')->group(function(){
    Route::get('/', ProductsListController::class);
    Route::get('/category/{category}', FilteredByCategoryController::class);
    Route::post('/', StoreProductController::class);
});

