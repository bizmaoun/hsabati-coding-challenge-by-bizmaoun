<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{
    /**
     * @return Category[]|Collection
     */
    public function all()
    {
        return Category::query()->get();
    }

    /**
     * create
     *
     * @param  array $attributes
     * @return Category
     */
    public function create(array $attributes): Category
    {
        return Category::query()->create($attributes);
    }

    /**
     * findById
     *
     * @param  int $id
     * @return Category
     */
    public function findById(int $id): ?Category
    {
        return Category::query()
            ->where('id', $id)
            ->first();
    }

    /**
     * findByName
     *
     * @param  string $name
     * @return Category
     */
    public function findByName(string $name): ?Category
    {
        return Category::query()
            ->where('name', $name)
            ->first();
    }
}
