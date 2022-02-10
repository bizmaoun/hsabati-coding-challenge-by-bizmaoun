<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Collection;
use App\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return Collection|Category[]
     */
    public function all()
    {
        return $this->categoryRepository->all();
    }

    public function findById(int $id): ?Category
    {
        return $this->categoryRepository->findById($id);
    }

    /**
     * addNewCategory
     *
     * @param  array $category
     * @return Category
     */
    public function addNewCategory(array $category): Category
    {
        return $this->categoryRepository->create($category);
    }
}

