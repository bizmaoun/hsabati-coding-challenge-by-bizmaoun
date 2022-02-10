<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository
{
    public function getPaginatedProducts()
    {
        return Product::query()
            ->with('categories')
            ->latest('created_at')
            ->paginate(10);
    }

    public function create(array $attributes): Product
    {
        return Product::query()
            ->create($attributes);
    }

    public function findById(int $id): ?Product
    {
        return Product::query()
            ->where('id', $id)
            ->first();
    }

    public function findByName(string $name): ?Product
    {
        return Product::query()
            ->where('name', $name)
            ->first();
    }

    /**
     * filterByCategory
     *
     * @param  int $category
     * @return Product[]|Collection
     */
    public function filterByCategory(int $category)
    {
        return Product::query()
            ->whereHas('categories', function($query) use ($category)
            {
                $query->where('category_id', '=', $category);
            }
            )
            ->paginate(10);
    }



}
