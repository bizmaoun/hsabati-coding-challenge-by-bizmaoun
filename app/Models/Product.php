<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    public const TABLE = 'products';

    protected $guarded = [];

    protected $casts = [
        'price' => 'decimal:2',
    ];


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
                Category::class,
                'categories_products',
                'product_id',
                'category_id');
        }

}

