<?php

namespace App\Http\Controllers\Categories;

use App\Services\CategoryService;
use App\Http\Controllers\Controller;

class AllCategoriesController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    public function __invoke()
    {
        $categories = $this->categoryService->all();

        return response()->json($categories);
    }
}
