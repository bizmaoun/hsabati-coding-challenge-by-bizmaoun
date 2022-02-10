<?php

namespace App\Http\Controllers\Products;

use App\Models\Category;
use Illuminate\Http\Response;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class FilteredByCategoryController extends Controller
{
    /** @var ProductService  */
    private $productService;

    /** @var CategoryService */
    private $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function __invoke(int $category)
    {
        $existedCategory = $this->categoryService->findById($category);
        if (!$existedCategory instanceof Category) {
            return response()->json(
                ['error' => 'category does not exist!'],
                Response::HTTP_NOT_FOUND
            );
        }
        $filteredProducts = $this->productService->getProductsFilteredByCategory($category);
        return response()->json(ProductResource::collection($filteredProducts), Response::HTTP_OK);
    }
}
