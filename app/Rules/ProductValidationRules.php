<?php

namespace App\Rules;


use App\Models\Category;

class ProductValidationRules {

    public const RULES = [
        'name'        => 'required|min:3|max:255',
        'description' => 'max:255',
        'price'       => 'required|numeric|min:0|max:100000',
        'image'       => 'nullable|mimes:jpg,jpeg,png|max:2048',
        'category_id' => 'required|numeric|exists:' . Category::class . ',id'
    ];
}
