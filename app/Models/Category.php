<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    public const TABLE = 'categories';

    protected $guarded = [];


    public function products(): BelongsToMany
    {
        return $this->belongsToMany(
                Product::class,
                'categories_products',
                'category_id',
                'product_id');
    }

}
