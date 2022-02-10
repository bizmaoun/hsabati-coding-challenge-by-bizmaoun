<?php

namespace App\Http\Controllers\Products;

use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductsListController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function __invoke()
    {
        $paginatedProducts = $this->productService->all();

        return response()->json(ProductResource::collection($paginatedProducts));
    }
}
